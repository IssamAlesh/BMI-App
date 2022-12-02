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

    /*public function save(adultRequest $request) {

        $bmi = [

            'gender'    => $request->get('gender'),
            'height'    => $request->get('height'),
            'weight'    => $request->get('weight'),
            'old'       => $request->get('old'),
        ];

        $bmi->save();

        return redirect()->route('/adultPeople');
    }*/

    /*public function checkBmi(adultRequest $request, $ageRange ,$height, $weight,$bmiRange, $gender)
    {
        //dd('test');
        $bmiRange['min'];
        $bmiRange['max'];
        $ageRange['min'];
        $ageRange['max'];*/


        public function calculateBmi($height,$weight) {
        //dd('test');
        /*$height = $request->get('height');
        $weight = $request->get('weight');
        $age = $request->get('age');
        $gender = $request->get('gender');*/







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

    public function check(adultRequest $request)
    {
        //dd('test');
        $height = $request->get('height');
        $weight = $request->get('weight');
        $age    = $request->get('age');
        $gender = $request->get('gender');
        $bmi    = $this->calculateBmi($height,$weight);
        $check  = $this->checkBmi($bmi,$age,$gender);

        /*if ($gender == "man") {
            $this->checkbmi($height, $weight, $age / $age, $gender, 19, 24);
            $this->checkbmi(height, weightm age / old, gender, 20, 25);
            $this->checkbmi(height, weightm age / old, gender, 19, 24);
            $this->checkbmi(height, weightm age / old, gender, 19, 24);

            $bmi= $this->checkBmi($age, 19, 24, $weight, $height, 19, 24, $gender);
            $this->checkBmi($age, 25, 34, $weight, $height, 20, 25, $gender);
            $this->checkBmi($age, 35, 44, $weight, $height, 21, 26, $gender);
            $this->checkBmi($age, 45, 54, $weight, $height, 22, 27, $gender);
            $this->checkBmi($age, 55, 64, $weight, $height, 23, 28, $gender);
            $this->checkBmi($age, 64, 100, $weight, $height, 24, 29, $gender);
        }
        if ($gender == "women") {
            $this->checkBmi($age, 19, 24, $weight, $height, 18, 23, $gender);
            $this->checkBmi($age, 25, 34, $weight, $height, 19, 24, $gender);
            $this->checkBmi($age, 35, 44, $weight, $height, 20, 25, $gender);
            $this->checkBmi($age, 45, 54, $weight, $height, 21, 26, $gender);
            $this->checkBmi($age, 55, 64, $weight, $height, 22, 27, $gender);
            $this->checkBmi($age, 64, 100, $weight, $height, 23, 28, $gender);
        }*/

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



            /*if ($gender == "m") {
                $this->checkBmi($old, 19, 24, $weight, $height, 19, 24, $gender);
                $this->checkBmi($old, 25, 34, $weight, $height, 20, 25, $gender);
                $this->checkBmi($old, 35, 44, $weight, $height, 21, 26, $gender);
                $this->checkBmi($old, 45, 54, $weight, $height, 22, 27, $gender);
                $this->checkBmi($old, 55, 64, $weight, $height, 23, 28, $gender);
                $this->checkBmi($old, 64, 100, $weight, $height, 24, 29, $gender);
            }
            if ($gender == "f") {
                $this->checkBmi($old, 19, 24, $weight, $height, 18, 23, $gender);
                $this->checkBmi($old, 25, 34, $weight, $height, 19, 24, $gender);
                $this->checkBmi($old, 35, 44, $weight, $height, 20, 25, $gender);
                $this->checkBmi($old, 45, 54, $weight, $height, 21, 26, $gender);
                $this->checkBmi($old, 55, 64, $weight, $height, 22, 27, $gender);
                $this->checkBmi($old, 64, 100, $weight, $height, 23, 28, $gender);
            }*/
        return redirect()->route('views.adultPeople')->withInput()->with('success',$result);
    }
}
