<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;

class UserService
{
    /**
     * @var $userRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Get all user.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->userRepository->getAll();
    }

    /**
     * Get user by id.
     *
     * @param $id
     * @return String
     */
    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }

    /**
     * saveUserData
     *
     * @param  mixed $data
     * @return void
     */
    public function saveUserData($data)
    {
        try {
            $this->userRepository->save($data);
        } catch (Exception $e) {
            // Log::info($e->getMessage());
            throw $e;
        }
    }

    /**
     * updateUser
     *
     * @param  mixed $data
     * @param  mixed $id
     * @return void
     */
    public function updateUser($data, $id)
    {

        try {
            $user = $this->userRepository->update($data, $id);
        } catch (Exception $e) {
            throw $e;
        }
        return $user;
    }

    /**
     * Delete user by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById($id)
    {
        try {
            $this->userRepository->delete($id);
        } catch (Exception $e) {
            throw $e;
        }
    }

}
