<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

   /* public function getRouteKeyName(){
        return 'name';
    }    name аркылы здейды таблицадан*/

    //protected $fillable = ['name'];

    protected $guarded = [];

    public function users(){
        return $this-> hasMany(User::class, 'role_id', 'id');
    }


}
