<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for 'DescribeConversionWorkspaceRevisions' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.DescribeConversionWorkspaceRevisionsResponse</code>
 */
class DescribeConversionWorkspaceRevisionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of conversion workspace revisions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ConversionWorkspace revisions = 1;</code>
     */
    private $revisions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\CloudDms\V1\ConversionWorkspace>|\Google\Protobuf\Internal\RepeatedField $revisions
     *           The list of conversion workspace revisions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of conversion workspace revisions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ConversionWorkspace revisions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRevisions()
    {
        return $this->revisions;
    }

    /**
     * The list of conversion workspace revisions.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.ConversionWorkspace revisions = 1;</code>
     * @param array<\Google\Cloud\CloudDms\V1\ConversionWorkspace>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRevisions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\ConversionWorkspace::class);
        $this->revisions = $arr;

        return $this;
    }

}

