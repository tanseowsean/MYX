<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for creating a connection profile.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.CreateConnectionProfileRequest</code>
 */
class CreateConnectionProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent that owns the collection of ConnectionProfiles.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The connection profile identifier.
     *
     * Generated from protobuf field <code>string connection_profile_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection_profile_id = '';
    /**
     * Required. The connection profile resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ConnectionProfile connection_profile = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection_profile = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';
    /**
     * Optional. Only validate the connection profile, but don't create any
     * resources. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;
    /**
     * Optional. Create the connection profile without validating it.
     *
     * Generated from protobuf field <code>bool force = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent that owns the collection of ConnectionProfiles.
     *     @type string $connection_profile_id
     *           Required. The connection profile identifier.
     *     @type \Google\Cloud\Datastream\V1\ConnectionProfile $connection_profile
     *           Required. The connection profile resource to create.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. Only validate the connection profile, but don't create any
     *           resources. The default is false.
     *     @type bool $force
     *           Optional. Create the connection profile without validating it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\Datastream::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent that owns the collection of ConnectionProfiles.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent that owns the collection of ConnectionProfiles.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The connection profile identifier.
     *
     * Generated from protobuf field <code>string connection_profile_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConnectionProfileId()
    {
        return $this->connection_profile_id;
    }

    /**
     * Required. The connection profile identifier.
     *
     * Generated from protobuf field <code>string connection_profile_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection_profile_id = $var;

        return $this;
    }

    /**
     * Required. The connection profile resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ConnectionProfile connection_profile = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastream\V1\ConnectionProfile|null
     */
    public function getConnectionProfile()
    {
        return $this->connection_profile;
    }

    public function hasConnectionProfile()
    {
        return isset($this->connection_profile);
    }

    public function clearConnectionProfile()
    {
        unset($this->connection_profile);
    }

    /**
     * Required. The connection profile resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ConnectionProfile connection_profile = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastream\V1\ConnectionProfile $var
     * @return $this
     */
    public function setConnectionProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\ConnectionProfile::class);
        $this->connection_profile = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. Only validate the connection profile, but don't create any
     * resources. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the connection profile, but don't create any
     * resources. The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. Create the connection profile without validating it.
     *
     * Generated from protobuf field <code>bool force = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Optional. Create the connection profile without validating it.
     *
     * Generated from protobuf field <code>bool force = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

