<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Types;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    //
    public function create(){
        return view('admin.types.create');
    }

    public function store(TypeRequest $request){
        $validate=$request->validated();
        Types::create($validate);
        return view('admin.types.create');
    }
}
