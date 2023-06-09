<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata\JobStats;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Load job statistics.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.JobStats.Load</code>
 */
class Load extends \Google\Protobuf\Internal\Message
{
    /**
     * Total bytes loaded by the import job.
     *
     * Generated from protobuf field <code>int64 total_output_bytes = 1;</code>
     */
    protected $total_output_bytes = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_output_bytes
     *           Total bytes loaded by the import job.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Total bytes loaded by the import job.
     *
     * Generated from protobuf field <code>int64 total_output_bytes = 1;</code>
     * @return int|string
     */
    public function getTotalOutputBytes()
    {
        return $this->total_output_bytes;
    }

    /**
     * Total bytes loaded by the import job.
     *
     * Generated from protobuf field <code>int64 total_output_bytes = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalOutputBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_output_bytes = $var;

        return $this;
    }

}


