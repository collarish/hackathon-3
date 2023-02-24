<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Http\Request;

class AnimalController extends Controller
{

    // create a form 
    public function create()
    {
        $animal = new Animal;

        return view('animals.form', compact('animal'));
    }

    public function insert(Request $request)
    {
        $animal = new Animal();
        $animal->name = $request->post('name');
        $animal->breed = $request->post('breed');
        $animal->age = $request->post('age');
        $animal->weight = $request->post('weight');
        $animal->save();

        session()->flash('success_message', 'Animal information were updated!');
        return redirect()->route('animals.create');


    }


    public function edit($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);

 

        return view('animals.form', compact('animal'));
    }


    public function update($animal_id, Request $request)
    {
        $animal = Animal::findOrFail($animal_id);
        $animal->name = $request->post('name');
        $animal->breed = $request->post('breed');
        $animal->age = $request->post('age');
        $animal->weight = $request->post('weight');
        $animal->save();

        session()->flash('success_message', 'Animal information were updated!');
        return redirect()->route('animals.index', $animal_id);
    }


    public function index($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);

         $animal_owner = Owner::leftJoin('animals','animals.owner_id', '=', 'owners.id')
        ->leftJoin('images','animals.image_id', '=', 'images.id')
        ->select('animals.*', 'owners.id as owner_id', 'owners.first_name', 'owners.surname', 'owners.email', 'owners.phone', 'owners.address', 'images.path')
        ->where('animals.id', $animal_id)
      
        ->first();

        // dd($animal_owner->owner_id);
        // dd( $animal_owner->path);


        return view('animals.index', compact('animal', 'animal_owner'));
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
