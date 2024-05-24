<?php

namespace App\Http\Controllers;

use Sample\ListUsersRequest;
use Spiral\GRPC\ContextInterface;
use Spiral\GRPC\StatusCode;

use Sample\UserService;
use Sample\UpdateUserRequest;
use Sample\User;

class SampleService extends UserService
{
    public function ListUsers(ListUsersRequest $request, ContextInterface $context)
    {
        $user = new User();
        return $user;
    }

    public function UpdateUser(UpdateUserRequest $request, ContextInterface $context): User
    {
        return $request->user;
    }
}