<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;

class MainController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return ['code' => 200, 'message' => 'Service OK', 'database' => env('DB_DATABASE')];
    }

    /**
     * Lista os usuários usando o Facades
     * @return array
     */
    public function users()
    {

        return $this->user->getCollection();

    }

}

