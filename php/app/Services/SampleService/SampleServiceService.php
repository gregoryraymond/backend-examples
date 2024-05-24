<?php

namespace App\Services\SampleService;

use Spiral\RoadRunner\GRPC\ContextInterface;
use GrpcServices\Sample\Messages\ListUsersRequest;
use GrpcServices\Sample\Messages\UpdateUserRequest;
use GrpcServices\Sample\Messages\User;

class SampleServiceService implements SampleServiceRepository
{
    public function ListUsers(ContextInterface $ctx, ListUsersRequest $r): User
    {
        return new USer();
    }

    public function UpdateUser(ContextInterface $ctx, UpdateUserRequest $r): User
    {
        return new User();
    }
}
