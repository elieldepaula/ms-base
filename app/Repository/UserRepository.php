<?php


namespace App\Repository;


use App\Models\User;

class UserRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getCollection()
    {
        $users = $this->user::all();
        return $users;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function read(int $id)
    {
        return $this->user::find($id);
    }

    public function create($var)
    {
        return $this->user->create($var);
    }

    public function update($id, $var)
    {
        return $this->user->where('id', $id)->update($var);
    }

    public function delete(int $id)
    {
        $user = $this->user->find($id);
        return $user->delete();
    }

}
