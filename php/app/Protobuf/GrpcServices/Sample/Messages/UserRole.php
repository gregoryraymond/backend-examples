<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sample.proto

namespace GrpcServices\Sample\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sample.UserRole</code>
 */
class UserRole extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.sample.Role role = 1;</code>
     */
    protected $role = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $role
     * }
     */
    public function __construct($data = NULL) {
        \GrpcServices\Sample\Sample::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.sample.Role role = 1;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Generated from protobuf field <code>.sample.Role role = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \GrpcServices\Sample\Messages\Role::class);
        $this->role = $var;

        return $this;
    }

}

