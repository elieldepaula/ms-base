<?php


namespace App\Models;


class User extends \Illuminate\Database\Eloquent\Model
{

    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "password",
        "status",
        "token"
    ];

}
