<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidsController extends Controller
{
    public function index() {
        return view('/views/kids');
    }

    public function calculateBmi($height,$weight) {

        return $bmi = $weight / ( $height * $height );

    }

    public function checkBmi($bmi,$age, $gender) {


        [$min, $max] = [14.5,18.4]; //man <= 24
        $i = 0;
        if ($age >24) {
            $i++;
        }
        if ($age >34) {
            $i++;
        }
        if ($age >44) {
            $i++;
        }
        if ($age >54) {
            $i++;
        }
        if ($age >64) {
            $i++;
        }

        if ($gender == "women") {
            $i--;

        }

        $min += $i;
        $max += $i;

        if($bmi < $min) {
            return -1;
        }
        if($bmi > $max) {
            return 1;
        }

        return 0;

    }

    public function check(adultRequest $request)
    {
        //dd('test');
        $height = $request->get('height');
        $weight = $request->get('weight');
        $age    = $request->get('age');
        $gender = $request->get('gender');
        $bmi    = $this->calculateBmi($height,$weight);
        $check  = $this->checkBmi($bmi,$age,$gender);

        $label = [
            'man' => 'Mann',
            'women' => 'Frau'
        ];


        if ($check === 0) {
            $result = $bmi . " Ihr BMI passt als " . $label[$gender];
        } elseif ($check === 1) {
            $result = $bmi . " Sie haben Ubergewicht als " . $label[$gender];
        } else {
            $result = $bmi . " Sie haben Leichtes Untergewicht als " . $label[$gender];
        }

        return redirect()->route('views.adultPeople')->withInput()->with('success',$result);
    }
}
