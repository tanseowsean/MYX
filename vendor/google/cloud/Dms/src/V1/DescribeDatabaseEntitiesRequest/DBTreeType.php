<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1\DescribeDatabaseEntitiesRequest;

use UnexpectedValueException;

/**
 * The type of a tree to return
 *
 * Protobuf type <code>google.cloud.clouddms.v1.DescribeDatabaseEntitiesRequest.DBTreeType</code>
 */
class DBTreeType
{
    /**
     * Unspecified tree type.
     *
     * Generated from protobuf enum <code>DB_TREE_TYPE_UNSPECIFIED = 0;</code>
     */
    const DB_TREE_TYPE_UNSPECIFIED = 0;
    /**
     * The source database tree.
     *
     * Generated from protobuf enum <code>SOURCE_TREE = 1;</code>
     */
    const SOURCE_TREE = 1;
    /**
     * The draft database tree.
     *
     * Generated from protobuf enum <code>DRAFT_TREE = 2;</code>
     */
    const DRAFT_TREE = 2;
    /**
     * The destination database tree.
     *
     * Generated from protobuf enum <code>DESTINATION_TREE = 3;</code>
     */
    const DESTINATION_TREE = 3;

    private static $valueToName = [
        self::DB_TREE_TYPE_UNSPECIFIED => 'DB_TREE_TYPE_UNSPECIFIED',
        self::SOURCE_TREE => 'SOURCE_TREE',
        self::DRAFT_TREE => 'DRAFT_TREE',
        self::DESTINATION_TREE => 'DESTINATION_TREE',
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


