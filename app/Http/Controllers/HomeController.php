<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $owners = Owner::orderBy('first_name')->limit(20)->get();

        $animals = Animal::orderBy('name')->limit(20)->get();

        $animals_owners = Owner::leftJoin('animals','animals.owner_id', '=', 'owners.id')
        ->leftJoin('images','animals.image_id', '=', 'images.id')
        ->select('animals.*', 'owners.id as owner_id', 'owners.first_name', 'owners.surname', 'owners.email', 'owners.phone', 'owners.address', 'images.path')
        ->get();


        return view('index.index', compact('animals', 'owners', 'animals_owners'));
    }
}
