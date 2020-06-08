<?php

namespace App\Http\Controllers;

use App\Repository\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $user;

//    protected $request;

    public function __construct(UserRepository $user)
    {
//        $this->request = $request;
        $this->user = $user;
    }

    public function index()
    {
        try {
            return $this->setResponse($this->user->getCollection());
        } catch (\Exception $ex) {
            return $this->setError($ex);
        }
    }

    public function read(int $id)
    {
        try {
            return $this->setResponse($this->user->read($id));
        } catch (\Exception $ex) {
            return $this->setError($ex);
        }
    }

    public function create(Request $req)
    {
        try {
            return $this->setResponse($this->user->create($req->input()));
        } catch (\Exception $ex) {
            return $this->setError($ex);
        }
    }

    public function update(int $id, Request $req)
    {
        try {
            return $this->setResponse($this->user->update($id, $req->input()));
        } catch (\Exception $ex) {
            return $this->setError($ex);
        }
    }

    public function delete(int $id)
    {
        try {
            return $this->setResponse($this->user->delete($id));
        } catch (\Exception $ex) {
            return $this->setError($ex);
        }
    }

}

