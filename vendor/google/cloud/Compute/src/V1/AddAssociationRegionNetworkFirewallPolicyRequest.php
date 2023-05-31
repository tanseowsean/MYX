<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionNetworkFirewallPolicies.AddAssociation. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AddAssociationRegionNetworkFirewallPolicyRequest</code>
 */
class AddAssociationRegionNetworkFirewallPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the firewall policy to update.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $firewall_policy = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FirewallPolicyAssociation firewall_policy_association_resource = 259546170 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $firewall_policy_association_resource = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     */
    private $region = '';
    /**
     * Indicates whether or not to replace it if an association already exists. This is false by default, in which case an error will be returned if an association already exists.
     *
     * Generated from protobuf field <code>optional bool replace_existing_association = 209541240;</code>
     */
    private $replace_existing_association = null;
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $firewall_policy
     *           Name of the firewall policy to update.
     *     @type \Google\Cloud\Compute\V1\FirewallPolicyAssociation $firewall_policy_association_resource
     *           The body resource for this request
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type bool $replace_existing_association
     *           Indicates whether or not to replace it if an association already exists. This is false by default, in which case an error will be returned if an association already exists.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the firewall policy to update.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFirewallPolicy()
    {
        return $this->firewall_policy;
    }

    /**
     * Name of the firewall policy to update.
     *
     * Generated from protobuf field <code>string firewall_policy = 498173265 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFirewallPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->firewall_policy = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FirewallPolicyAssociation firewall_policy_association_resource = 259546170 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\FirewallPolicyAssociation|null
     */
    public function getFirewallPolicyAssociationResource()
    {
        return $this->firewall_policy_association_resource;
    }

    public function hasFirewallPolicyAssociationResource()
    {
        return isset($this->firewall_policy_association_resource);
    }

    public function clearFirewallPolicyAssociationResource()
    {
        unset($this->firewall_policy_association_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.FirewallPolicyAssociation firewall_policy_association_resource = 259546170 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\FirewallPolicyAssociation $var
     * @return $this
     */
    public function setFirewallPolicyAssociationResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\FirewallPolicyAssociation::class);
        $this->firewall_policy_association_resource = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Indicates whether or not to replace it if an association already exists. This is false by default, in which case an error will be returned if an association already exists.
     *
     * Generated from protobuf field <code>optional bool replace_existing_association = 209541240;</code>
     * @return bool
     */
    public function getReplaceExistingAssociation()
    {
        return isset($this->replace_existing_association) ? $this->replace_existing_association : false;
    }

    public function hasReplaceExistingAssociation()
    {
        return isset($this->replace_existing_association);
    }

    public function clearReplaceExistingAssociation()
    {
        unset($this->replace_existing_association);
    }

    /**
     * Indicates whether or not to replace it if an association already exists. This is false by default, in which case an error will be returned if an association already exists.
     *
     * Generated from protobuf field <code>optional bool replace_existing_association = 209541240;</code>
     * @param bool $var
     * @return $this
     */
    public function setReplaceExistingAssociation($var)
    {
        GPBUtil::checkBool($var);
        $this->replace_existing_association = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
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

