<?php

namespace App\Http\Controllers;

use App\Http\Requests\adultRequest;
use Illuminate\Http\Request;

class adultPeopleController extends Controller
{
    public function index() {
        //dump('test');
        return view('/views/adultPeople');
    }





        public function calculateBmi($height,$weight) {
        //dd('test');

        return $bmi = $weight / ( $height * $height );
    }

    public function checkBmi($bmi,$age, $gender) {


            [$min, $max] = [19,24]; //man <= 24
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

    public function checkApi(Request $request)
    {
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

        return [
            "message" => $result,
            "bmi" => $bmi,
        ];
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
                $result = $bmi . " Sie haben Übergewicht als " . $label[$gender];
            } else {
                $result = $bmi . " Sie haben Leichtes Untergewicht als " . $label[$gender];
            }

            //$results = round($result,1);


        return redirect()->route('views.adultPeople')->withInput()->with('success',$result);
    }
}
