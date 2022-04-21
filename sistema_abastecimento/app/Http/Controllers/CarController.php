<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Suplly;
use App\Models\User;
use App\Models\Car;

class CarController extends Controller
{
    public function car(){

        $users = User::all();
        $cars = Car::all();
        $cars = Car::where('id', $id)->get()->toArray();
        echo "<pre>";
            var_dump($cars);
        echo "</pre>";
        return view('car.main',['users' => $users],['cars' => $cars]);
    }

    public function getCarByUserId($id_user){

        echo "$id_user";

        $cars = Car::where('id_user', $id_user)->get()->toArray();
        echo "<pre>";
            var_dump($cars);
        echo "</pre>";
        
        return view('suplly.create',['cars' => $cars]);
    }

    public function create_car(){
        return view('car.create');
    }
}
