<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataform/v1beta1/dataform.proto

namespace Google\Cloud\Dataform\V1beta1\WorkflowInvocationAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a workflow action that will run against BigQuery.
 *
 * Generated from protobuf message <code>google.cloud.dataform.v1beta1.WorkflowInvocationAction.BigQueryAction</code>
 */
class BigQueryAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The generated BigQuery SQL script that will be executed.
     *
     * Generated from protobuf field <code>string sql_script = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sql_script = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql_script
     *           Output only. The generated BigQuery SQL script that will be executed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataform\V1Beta1\Dataform::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The generated BigQuery SQL script that will be executed.
     *
     * Generated from protobuf field <code>string sql_script = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSqlScript()
    {
        return $this->sql_script;
    }

    /**
     * Output only. The generated BigQuery SQL script that will be executed.
     *
     * Generated from protobuf field <code>string sql_script = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSqlScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql_script = $var;

        return $this;
    }

}


