<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Firewall Policy resource.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.FirewallPolicy</code>
 */
class FirewallPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of associations that belong to this firewall policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyAssociation associations = 508736530;</code>
     */
    private $associations;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Deprecated, please use short name instead. User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     */
    private $display_name = null;
    /**
     * Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the firewall policy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output only] Type of the resource. Always compute#firewallPolicyfor firewall policies
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. For Organization Firewall Policies it's a [Output Only] numeric ID allocated by Google Cloud which uniquely identifies the Organization Firewall Policy.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] The parent of the firewall policy. This field is not applicable to network firewall policies.
     *
     * Generated from protobuf field <code>optional string parent = 78317738;</code>
     */
    private $parent = null;
    /**
     * [Output Only] URL of the region where the regional firewall policy resides. This field is not applicable to global firewall policies. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Total count of all firewall policy rule tuples. A firewall policy can not exceed a set number of tuples.
     *
     * Generated from protobuf field <code>optional int32 rule_tuple_count = 388342037;</code>
     */
    private $rule_tuple_count = null;
    /**
     * A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a firewall policy, a default rule with action "allow" will be added.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     */
    private $rules;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     */
    private $self_link_with_id = null;
    /**
     * User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string short_name = 492051566;</code>
     */
    private $short_name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Compute\V1\FirewallPolicyAssociation>|\Google\Protobuf\Internal\RepeatedField $associations
     *           A list of associations that belong to this firewall policy.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $display_name
     *           Deprecated, please use short name instead. User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $fingerprint
     *           Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the firewall policy.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output only] Type of the resource. Always compute#firewallPolicyfor firewall policies
     *     @type string $name
     *           Name of the resource. For Organization Firewall Policies it's a [Output Only] numeric ID allocated by Google Cloud which uniquely identifies the Organization Firewall Policy.
     *     @type string $parent
     *           [Output Only] The parent of the firewall policy. This field is not applicable to network firewall policies.
     *     @type string $region
     *           [Output Only] URL of the region where the regional firewall policy resides. This field is not applicable to global firewall policies. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *     @type int $rule_tuple_count
     *           [Output Only] Total count of all firewall policy rule tuples. A firewall policy can not exceed a set number of tuples.
     *     @type array<\Google\Cloud\Compute\V1\FirewallPolicyRule>|\Google\Protobuf\Internal\RepeatedField $rules
     *           A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a firewall policy, a default rule with action "allow" will be added.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $self_link_with_id
     *           [Output Only] Server-defined URL for this resource with the resource id.
     *     @type string $short_name
     *           User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of associations that belong to this firewall policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyAssociation associations = 508736530;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociations()
    {
        return $this->associations;
    }

    /**
     * A list of associations that belong to this firewall policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyAssociation associations = 508736530;</code>
     * @param array<\Google\Cloud\Compute\V1\FirewallPolicyAssociation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyAssociation::class);
        $this->associations = $arr;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Deprecated, please use short name instead. User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return isset($this->display_name) ? $this->display_name : '';
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * Deprecated, please use short name instead. User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string display_name = 4473832;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the firewall policy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the firewall policy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output only] Type of the resource. Always compute#firewallPolicyfor firewall policies
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output only] Type of the resource. Always compute#firewallPolicyfor firewall policies
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. For Organization Firewall Policies it's a [Output Only] numeric ID allocated by Google Cloud which uniquely identifies the Organization Firewall Policy.
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
     * Name of the resource. For Organization Firewall Policies it's a [Output Only] numeric ID allocated by Google Cloud which uniquely identifies the Organization Firewall Policy.
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

    /**
     * [Output Only] The parent of the firewall policy. This field is not applicable to network firewall policies.
     *
     * Generated from protobuf field <code>optional string parent = 78317738;</code>
     * @return string
     */
    public function getParent()
    {
        return isset($this->parent) ? $this->parent : '';
    }

    public function hasParent()
    {
        return isset($this->parent);
    }

    public function clearParent()
    {
        unset($this->parent);
    }

    /**
     * [Output Only] The parent of the firewall policy. This field is not applicable to network firewall policies.
     *
     * Generated from protobuf field <code>optional string parent = 78317738;</code>
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
     * [Output Only] URL of the region where the regional firewall policy resides. This field is not applicable to global firewall policies. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where the regional firewall policy resides. This field is not applicable to global firewall policies. You must specify this field as part of the HTTP request URL. It is not settable as a field in the request body.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
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
     * [Output Only] Total count of all firewall policy rule tuples. A firewall policy can not exceed a set number of tuples.
     *
     * Generated from protobuf field <code>optional int32 rule_tuple_count = 388342037;</code>
     * @return int
     */
    public function getRuleTupleCount()
    {
        return isset($this->rule_tuple_count) ? $this->rule_tuple_count : 0;
    }

    public function hasRuleTupleCount()
    {
        return isset($this->rule_tuple_count);
    }

    public function clearRuleTupleCount()
    {
        unset($this->rule_tuple_count);
    }

    /**
     * [Output Only] Total count of all firewall policy rule tuples. A firewall policy can not exceed a set number of tuples.
     *
     * Generated from protobuf field <code>optional int32 rule_tuple_count = 388342037;</code>
     * @param int $var
     * @return $this
     */
    public function setRuleTupleCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->rule_tuple_count = $var;

        return $this;
    }

    /**
     * A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a firewall policy, a default rule with action "allow" will be added.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a firewall policy, a default rule with action "allow" will be added.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.FirewallPolicyRule rules = 108873975;</code>
     * @param array<\Google\Cloud\Compute\V1\FirewallPolicyRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\FirewallPolicyRule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @return string
     */
    public function getSelfLinkWithId()
    {
        return isset($this->self_link_with_id) ? $this->self_link_with_id : '';
    }

    public function hasSelfLinkWithId()
    {
        return isset($this->self_link_with_id);
    }

    public function clearSelfLinkWithId()
    {
        unset($this->self_link_with_id);
    }

    /**
     * [Output Only] Server-defined URL for this resource with the resource id.
     *
     * Generated from protobuf field <code>optional string self_link_with_id = 44520962;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLinkWithId($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link_with_id = $var;

        return $this;
    }

    /**
     * User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string short_name = 492051566;</code>
     * @return string
     */
    public function getShortName()
    {
        return isset($this->short_name) ? $this->short_name : '';
    }

    public function hasShortName()
    {
        return isset($this->short_name);
    }

    public function clearShortName()
    {
        unset($this->short_name);
    }

    /**
     * User-provided name of the Organization firewall policy. The name should be unique in the organization in which the firewall policy is created. This field is not applicable to network firewall policies. This name must be set on creation and cannot be changed. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string short_name = 492051566;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->short_name = $var;

        return $this;
    }

}

