<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $name= "Vattelapesca";
    $surname= "Pescalatta";

    return view('home',[
        "name"=> $name,
        "surname"=>$surname,
    ]);
});

