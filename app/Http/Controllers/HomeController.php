<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Maker;
use App\Models\FuelType;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        //Select All Cars
        $cars = Car::get();

        // $cars = Car::where('published_at','!=', null)->where('user_id', 1)->get();

        // dump($cars);

        //1
        // Car::where('price','>',20000)->get();

        //2
        // $makers = Car::where('maker_id','2')
        // ->where('user_id',1)
        // ->get();

        // dump($makers);

        //3
        // FuelType::updateOrCreate(
        //     ['name'=>'Electric']
        // );

        //4
        // Car::where( 'id', 1)->update(['price' => 15000]);

        //5
        // Car::where('year','<',2020)->delete();

        // $fuelTypesData = [
        //     'name'=>'Eletric' 
        // ];

        
        // $car = Car::find(2);

        // dd($car);

        return view('home.index');
    }
}
 