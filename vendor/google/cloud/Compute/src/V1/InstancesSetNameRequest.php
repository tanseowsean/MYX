<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesSetNameRequest</code>
 */
class InstancesSetNameRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The current name of this resource, used to prevent conflicts. Provide the latest name when making a request to change name.
     *
     * Generated from protobuf field <code>optional string current_name = 394983825;</code>
     */
    private $current_name = null;
    /**
     * The name to be applied to the instance. Needs to be RFC 1035 compliant.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $current_name
     *           The current name of this resource, used to prevent conflicts. Provide the latest name when making a request to change name.
     *     @type string $name
     *           The name to be applied to the instance. Needs to be RFC 1035 compliant.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The current name of this resource, used to prevent conflicts. Provide the latest name when making a request to change name.
     *
     * Generated from protobuf field <code>optional string current_name = 394983825;</code>
     * @return string
     */
    public function getCurrentName()
    {
        return isset($this->current_name) ? $this->current_name : '';
    }

    public function hasCurrentName()
    {
        return isset($this->current_name);
    }

    public function clearCurrentName()
    {
        unset($this->current_name);
    }

    /**
     * The current name of this resource, used to prevent conflicts. Provide the latest name when making a request to change name.
     *
     * Generated from protobuf field <code>optional string current_name = 394983825;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->current_name = $var;

        return $this;
    }

    /**
     * The name to be applied to the instance. Needs to be RFC 1035 compliant.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name to be applied to the instance. Needs to be RFC 1035 compliant.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

