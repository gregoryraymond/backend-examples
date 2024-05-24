<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sample.proto

namespace GrpcServices\Sample\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sample.UpdateUserRequest</code>
 */
class UpdateUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The user resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.sample.User user = 1;</code>
     */
    protected $user = null;
    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>uint32 update = 2;</code>
     */
    protected $update = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GrpcServices\Sample\Messages\User $user
     *           The user resource which replaces the resource on the server.
     *     @type int $update
     *           The update mask applies to the resource. For the `FieldMask` definition,
     *           see https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * }
     */
    public function __construct($data = NULL) {
        \GrpcServices\Sample\Sample::initOnce();
        parent::__construct($data);
    }

    /**
     * The user resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.sample.User user = 1;</code>
     * @return \GrpcServices\Sample\Messages\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * The user resource which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.sample.User user = 1;</code>
     * @param \GrpcServices\Sample\Messages\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \GrpcServices\Sample\Messages\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>uint32 update = 2;</code>
     * @return int
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * The update mask applies to the resource. For the `FieldMask` definition,
     * see https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     *
     * Generated from protobuf field <code>uint32 update = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkUint32($var);
        $this->update = $var;

        return $this;
    }

}

