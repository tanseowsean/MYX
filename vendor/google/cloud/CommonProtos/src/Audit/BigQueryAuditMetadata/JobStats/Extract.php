<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata\JobStats;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Extract job statistics.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.JobStats.Extract</code>
 */
class Extract extends \Google\Protobuf\Internal\Message
{
    /**
     * Total bytes exported by the extract job.
     *
     * Generated from protobuf field <code>int64 total_input_bytes = 1;</code>
     */
    protected $total_input_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_input_bytes
     *           Total bytes exported by the extract job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Total bytes exported by the extract job.
     *
     * Generated from protobuf field <code>int64 total_input_bytes = 1;</code>
     * @return int|string
     */
    public function getTotalInputBytes()
    {
        return $this->total_input_bytes;
    }

    /**
     * Total bytes exported by the extract job.
     *
     * Generated from protobuf field <code>int64 total_input_bytes = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalInputBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_input_bytes = $var;

        return $this;
    }

}


