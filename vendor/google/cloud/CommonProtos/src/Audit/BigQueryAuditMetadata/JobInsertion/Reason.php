<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata\JobInsertion;

use UnexpectedValueException;

/**
 * Describes how the job was inserted.
 *
 * Protobuf type <code>google.cloud.audit.BigQueryAuditMetadata.JobInsertion.Reason</code>
 */
class Reason
{
    /**
     * Unknown.
     *
     * Generated from protobuf enum <code>REASON_UNSPECIFIED = 0;</code>
     */
    const REASON_UNSPECIFIED = 0;
    /**
     * Job was inserted using the jobs.insert API.
     *
     * Generated from protobuf enum <code>JOB_INSERT_REQUEST = 1;</code>
     */
    const JOB_INSERT_REQUEST = 1;
    /**
     * Job was inserted using the jobs.query RPC.
     *
     * Generated from protobuf enum <code>QUERY_REQUEST = 2;</code>
     */
    const QUERY_REQUEST = 2;

    private static $valueToName = [
        self::REASON_UNSPECIFIED => 'REASON_UNSPECIFIED',
        self::JOB_INSERT_REQUEST => 'JOB_INSERT_REQUEST',
        self::QUERY_REQUEST => 'QUERY_REQUEST',
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


