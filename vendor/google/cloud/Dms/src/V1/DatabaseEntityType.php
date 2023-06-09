<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use UnexpectedValueException;

/**
 * The type of database entities supported,
 *
 * Protobuf type <code>google.cloud.clouddms.v1.DatabaseEntityType</code>
 */
class DatabaseEntityType
{
    /**
     * Unspecified database entity type.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_UNSPECIFIED = 0;</code>
     */
    const DATABASE_ENTITY_TYPE_UNSPECIFIED = 0;
    /**
     * Schema.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_SCHEMA = 1;</code>
     */
    const DATABASE_ENTITY_TYPE_SCHEMA = 1;
    /**
     * Table.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_TABLE = 2;</code>
     */
    const DATABASE_ENTITY_TYPE_TABLE = 2;
    /**
     * Column.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_COLUMN = 3;</code>
     */
    const DATABASE_ENTITY_TYPE_COLUMN = 3;
    /**
     * Constraint.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_CONSTRAINT = 4;</code>
     */
    const DATABASE_ENTITY_TYPE_CONSTRAINT = 4;
    /**
     * Index.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_INDEX = 5;</code>
     */
    const DATABASE_ENTITY_TYPE_INDEX = 5;
    /**
     * Trigger.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_TRIGGER = 6;</code>
     */
    const DATABASE_ENTITY_TYPE_TRIGGER = 6;
    /**
     * View.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_VIEW = 7;</code>
     */
    const DATABASE_ENTITY_TYPE_VIEW = 7;
    /**
     * Sequence.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_SEQUENCE = 8;</code>
     */
    const DATABASE_ENTITY_TYPE_SEQUENCE = 8;
    /**
     * Stored Procedure.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_STORED_PROCEDURE = 9;</code>
     */
    const DATABASE_ENTITY_TYPE_STORED_PROCEDURE = 9;
    /**
     * Function.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_FUNCTION = 10;</code>
     */
    const DATABASE_ENTITY_TYPE_FUNCTION = 10;
    /**
     * Synonym.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_SYNONYM = 11;</code>
     */
    const DATABASE_ENTITY_TYPE_SYNONYM = 11;
    /**
     * Package.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_DATABASE_PACKAGE = 12;</code>
     */
    const DATABASE_ENTITY_TYPE_DATABASE_PACKAGE = 12;
    /**
     * UDT.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_UDT = 13;</code>
     */
    const DATABASE_ENTITY_TYPE_UDT = 13;
    /**
     * Materialized View.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW = 14;</code>
     */
    const DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW = 14;
    /**
     * Database.
     *
     * Generated from protobuf enum <code>DATABASE_ENTITY_TYPE_DATABASE = 15;</code>
     */
    const DATABASE_ENTITY_TYPE_DATABASE = 15;

    private static $valueToName = [
        self::DATABASE_ENTITY_TYPE_UNSPECIFIED => 'DATABASE_ENTITY_TYPE_UNSPECIFIED',
        self::DATABASE_ENTITY_TYPE_SCHEMA => 'DATABASE_ENTITY_TYPE_SCHEMA',
        self::DATABASE_ENTITY_TYPE_TABLE => 'DATABASE_ENTITY_TYPE_TABLE',
        self::DATABASE_ENTITY_TYPE_COLUMN => 'DATABASE_ENTITY_TYPE_COLUMN',
        self::DATABASE_ENTITY_TYPE_CONSTRAINT => 'DATABASE_ENTITY_TYPE_CONSTRAINT',
        self::DATABASE_ENTITY_TYPE_INDEX => 'DATABASE_ENTITY_TYPE_INDEX',
        self::DATABASE_ENTITY_TYPE_TRIGGER => 'DATABASE_ENTITY_TYPE_TRIGGER',
        self::DATABASE_ENTITY_TYPE_VIEW => 'DATABASE_ENTITY_TYPE_VIEW',
        self::DATABASE_ENTITY_TYPE_SEQUENCE => 'DATABASE_ENTITY_TYPE_SEQUENCE',
        self::DATABASE_ENTITY_TYPE_STORED_PROCEDURE => 'DATABASE_ENTITY_TYPE_STORED_PROCEDURE',
        self::DATABASE_ENTITY_TYPE_FUNCTION => 'DATABASE_ENTITY_TYPE_FUNCTION',
        self::DATABASE_ENTITY_TYPE_SYNONYM => 'DATABASE_ENTITY_TYPE_SYNONYM',
        self::DATABASE_ENTITY_TYPE_DATABASE_PACKAGE => 'DATABASE_ENTITY_TYPE_DATABASE_PACKAGE',
        self::DATABASE_ENTITY_TYPE_UDT => 'DATABASE_ENTITY_TYPE_UDT',
        self::DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW => 'DATABASE_ENTITY_TYPE_MATERIALIZED_VIEW',
        self::DATABASE_ENTITY_TYPE_DATABASE => 'DATABASE_ENTITY_TYPE_DATABASE',
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

