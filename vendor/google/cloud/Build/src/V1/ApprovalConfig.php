<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ApprovalConfig describes configuration for manual approval of a build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.ApprovalConfig</code>
 */
class ApprovalConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether or not approval is needed. If this is set on a build, it will
     * become pending when created, and will need to be explicitly approved
     * to start.
     *
     * Generated from protobuf field <code>bool approval_required = 1;</code>
     */
    private $approval_required = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $approval_required
     *           Whether or not approval is needed. If this is set on a build, it will
     *           become pending when created, and will need to be explicitly approved
     *           to start.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether or not approval is needed. If this is set on a build, it will
     * become pending when created, and will need to be explicitly approved
     * to start.
     *
     * Generated from protobuf field <code>bool approval_required = 1;</code>
     * @return bool
     */
    public function getApprovalRequired()
    {
        return $this->approval_required;
    }

    /**
     * Whether or not approval is needed. If this is set on a build, it will
     * become pending when created, and will need to be explicitly approved
     * to start.
     *
     * Generated from protobuf field <code>bool approval_required = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setApprovalRequired($var)
    {
        GPBUtil::checkBool($var);
        $this->approval_required = $var;

        return $this;
    }

}

