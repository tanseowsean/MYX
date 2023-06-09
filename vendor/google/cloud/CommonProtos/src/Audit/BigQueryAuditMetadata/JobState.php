<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use UnexpectedValueException;

/**
 * State of a job.
 *
 * Protobuf type <code>google.cloud.audit.BigQueryAuditMetadata.JobState</code>
 */
class JobState
{
    /**
     * State unknown.
     *
     * Generated from protobuf enum <code>JOB_STATE_UNSPECIFIED = 0;</code>
     */
    const JOB_STATE_UNSPECIFIED = 0;
    /**
     * Job is waiting for the resources.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * Job is running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * Job is done.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;

    private static $valueToName = [
        self::JOB_STATE_UNSPECIFIED => 'JOB_STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::RUNNING => 'RUNNING',
        self::DONE => 'DONE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


