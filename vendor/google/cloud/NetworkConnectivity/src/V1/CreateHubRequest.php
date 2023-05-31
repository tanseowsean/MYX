<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for
 * [HubService.CreateHub][google.cloud.networkconnectivity.v1.HubService.CreateHub]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.CreateHubRequest</code>
 */
class CreateHubRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. A unique identifier for the hub.
     *
     * Generated from protobuf field <code>string hub_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $hub_id = '';
    /**
     * Required. The initial values for a new hub.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Hub hub = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $hub = null;
    /**
     * Optional. A unique request ID (optional). If you specify this ID, you can
     * use it in cases when you need to retry your request. When you need to
     * retry, this ID lets the server know that it can ignore the request if it
     * has already been completed. The server guarantees that for at least 60
     * minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource.
     *     @type string $hub_id
     *           Required. A unique identifier for the hub.
     *     @type \Google\Cloud\NetworkConnectivity\V1\Hub $hub
     *           Required. The initial values for a new hub.
     *     @type string $request_id
     *           Optional. A unique request ID (optional). If you specify this ID, you can
     *           use it in cases when you need to retry your request. When you need to
     *           retry, this ID lets the server know that it can ignore the request if it
     *           has already been completed. The server guarantees that for at least 60
     *           minutes after the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check to see whether the original operation
     *           was received. If it was, the server ignores the second request. This
     *           behavior prevents clients from mistakenly creating duplicate commitments.
     *           The request ID must be a valid UUID, with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource.
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
     * Required. A unique identifier for the hub.
     *
     * Generated from protobuf field <code>string hub_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHubId()
    {
        return $this->hub_id;
    }

    /**
     * Required. A unique identifier for the hub.
     *
     * Generated from protobuf field <code>string hub_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHubId($var)
    {
        GPBUtil::checkString($var, True);
        $this->hub_id = $var;

        return $this;
    }

    /**
     * Required. The initial values for a new hub.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Hub hub = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\Hub|null
     */
    public function getHub()
    {
        return $this->hub;
    }

    public function hasHub()
    {
        return isset($this->hub);
    }

    public function clearHub()
    {
        unset($this->hub);
    }

    /**
     * Required. The initial values for a new hub.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.Hub hub = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\Hub $var
     * @return $this
     */
    public function setHub($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\Hub::class);
        $this->hub = $var;

        return $this;
    }

    /**
     * Optional. A unique request ID (optional). If you specify this ID, you can
     * use it in cases when you need to retry your request. When you need to
     * retry, this ID lets the server know that it can ignore the request if it
     * has already been completed. The server guarantees that for at least 60
     * minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
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
     * Optional. A unique request ID (optional). If you specify this ID, you can
     * use it in cases when you need to retry your request. When you need to
     * retry, this ID lets the server know that it can ignore the request if it
     * has already been completed. The server guarantees that for at least 60
     * minutes after the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check to see whether the original operation
     * was received. If it was, the server ignores the second request. This
     * behavior prevents clients from mistakenly creating duplicate commitments.
     * The request ID must be a valid UUID, with the exception that zero UUID is
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

}

