<?php

namespace App\Services\SampleService;

use Spiral\RoadRunner\GRPC\ServiceInterface;
use Spiral\RoadRunner\GRPC\ContextInterface;

use GrpcServices\Sample\Messages\ListUsersRequest;
use GrpcServices\Sample\Messages\UpdateUserRequest;
use GrpcServices\Sample\Messages\User;

interface SampleServiceRepository extends ServiceInterface
{
    const NAME = 'services.SampleService';

    public function ListUsers(ContextInterface $ctx, ListUsersRequest $r): User;
    public function UpdateUser(ContextInterface $ctx, UpdateUserRequest $r): User;
}
