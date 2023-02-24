<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use Illuminate\Http\Request;
use App\Models\Animal;

class OwnerController extends Controller
{
    public function detail($id) {
        $owner = Owner::findOrFail($id);
        $owner_animal =  Owner::leftJoin('animals','animals.owner_id','=','owners.id')
        ->select('animals.name', 'animals.id')
        ->where('owners.id',$id)
        ->get()
        ;
        return view ('owner/detail', compact('owner', 'owner_animal'));
            }
    

    public function create() {
        $owner = new Owner;
        return view ('owner/create', compact('owner'));
    }

    public function insert(Request $request) {
        $owner = new Owner;
    $owner->first_name = $request->post('first_name');    
    $owner->surname = $request->post('surname');    
    $owner->phone = $request->post('phone');    
    $owner->address = $request->post('address');    
    $owner->email = $request->post('email');    
    $owner->save();
    session()->flash('success_message','Owner successfully created!');
    return redirect()->route('owner.create');
}


}
