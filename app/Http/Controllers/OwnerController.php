<?php

namespace App\Http\Controllers;
use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function detail($id) {
        $owner = Owner::findOrFail($id);
        return view ('owner/detail', compact('owner'));
            }



}
