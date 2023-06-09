<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Routine change event.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.RoutineChange</code>
 */
class RoutineChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Updated routine.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Routine routine = 1;</code>
     */
    protected $routine = null;
    /**
     * Describes how the routine was updated.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineChange.Reason reason = 3;</code>
     */
    protected $reason = 0;
    /**
     * The URI of the job that updated the routine.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     */
    protected $job_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\Routine $routine
     *           Updated routine.
     *     @type int $reason
     *           Describes how the routine was updated.
     *     @type string $job_name
     *           The URI of the job that updated the routine.
     *           Format: `projects/<project_id>/jobs/<job_id>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Updated routine.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Routine routine = 1;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\Routine|null
     */
    public function getRoutine()
    {
        return $this->routine;
    }

    public function hasRoutine()
    {
        return isset($this->routine);
    }

    public function clearRoutine()
    {
        unset($this->routine);
    }

    /**
     * Updated routine.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.Routine routine = 1;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\Routine $var
     * @return $this
     */
    public function setRoutine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\Routine::class);
        $this->routine = $var;

        return $this;
    }

    /**
     * Describes how the routine was updated.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineChange.Reason reason = 3;</code>
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Describes how the routine was updated.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.RoutineChange.Reason reason = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Audit\BigQueryAuditMetadata\RoutineChange\Reason::class);
        $this->reason = $var;

        return $this;
    }

    /**
     * The URI of the job that updated the routine.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * The URI of the job that updated the routine.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

}


