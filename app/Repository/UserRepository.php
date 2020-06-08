<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{

    /**
     * @var User
     */
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Return a list of users.
     *
     * @todo Implementar critérios de filtro.
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     * @throws \Exception
     */
    public function getCollection()
    {
        try {
            return $this->user->all();
        } catch (\Exception $ex) {
            throw new \Exception('Failed to get user list.');
        }
    }

    /**
     * Return a user by ID.
     *
     * @param int $id
     * @return mixed
     * @throws \Exception
     */
    public function read(int $id)
    {
        try {
            return $this->user::find($id);
        } catch (\Exception $ex) {
            throw new \Exception('Failed to get user.');
        }
    }

    /**
     * Create and return a user.
     *
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function create(array $data)
    {
        try {
            return $this->user->create($data);
        } catch (\Exception $ex) {
            throw new \Exception('Failed to create user.');
        }
    }

    /**
     * Update and return a user object.
     *
     * @param int $id
     * @param array $data
     * @return mixed
     * @throws \Exception
     */
    public function update(int $id, array $data)
    {
        try {
            $this->user->where('id', $id)->update($data);
            return $this->user->find($id);
        } catch (\Exception $ex) {
            throw new \Exception('Failed to update user.');
        }
    }

    /**
     * Ddelete a user.
     *
     * @param int $id
     * @return mixed
     * @throws \Exception
     */
    public function delete(int $id)
    {
        try {
            if (!$this->user->destroy($id)) {
                throw new \Exception('Failed to delete user.');
            }
            return "User deleted";
        } catch (\Exception $ex) {
            throw new \Exception('Failed to delete user.');
        }
    }

}
