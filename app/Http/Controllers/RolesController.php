<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RolesController extends Controller
{
    public function create(Request $request){
        
        //Role::create($request->only('name'));
        return response()->json(true);
    }

    public function update(Request $request, Role $role){
       
        //$role-> update($request->only('name'));
        return response()->json(true);
    }

    public function index(){


        return response()->json(Role::get());
    }
}
