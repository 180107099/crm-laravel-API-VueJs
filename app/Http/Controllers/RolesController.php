<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
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

    public function show(Role $role)
    {
        return response()->json(['data' => $role]);
    }

    public function users(Role $role)
    {
        // users() жакша колданса get колдану керек егер жакша болмаса collection, get керек емес 
        //return $role->users()->get();
        return $role->users->first()->role->first();
    }
}
