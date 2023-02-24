<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);
    


        return view('animals.index', compact('animal'));
    }


    public function list()
    {

        

        $builder = Animal::orderBy('name')
            ->where('id', 1) 
            ->limit(20);
        $animals = $builder->get();

        return view('animals.index', compact('animals'));
    }
}
