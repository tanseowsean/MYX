<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/model.proto

namespace Google\Cloud\Retail\V2\Model;

use UnexpectedValueException;

/**
 * The training state of the model.
 *
 * Protobuf type <code>google.cloud.retail.v2.Model.TrainingState</code>
 */
class TrainingState
{
    /**
     * Unspecified training state.
     *
     * Generated from protobuf enum <code>TRAINING_STATE_UNSPECIFIED = 0;</code>
     */
    const TRAINING_STATE_UNSPECIFIED = 0;
    /**
     * The model training is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 1;</code>
     */
    const PAUSED = 1;
    /**
     * The model is training.
     *
     * Generated from protobuf enum <code>TRAINING = 2;</code>
     */
    const TRAINING = 2;

    private static $valueToName = [
        self::TRAINING_STATE_UNSPECIFIED => 'TRAINING_STATE_UNSPECIFIED',
        self::PAUSED => 'PAUSED',
        self::TRAINING => 'TRAINING',
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


