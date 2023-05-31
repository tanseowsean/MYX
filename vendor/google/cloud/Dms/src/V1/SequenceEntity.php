<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sequence's parent is a schema.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.SequenceEntity</code>
 */
class SequenceEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * Increment value for the sequence.
     *
     * Generated from protobuf field <code>int64 increment = 1;</code>
     */
    private $increment = 0;
    /**
     * Start number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes start_value = 2;</code>
     */
    private $start_value = '';
    /**
     * Maximum number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes max_value = 3;</code>
     */
    private $max_value = '';
    /**
     * Minimum number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes min_value = 4;</code>
     */
    private $min_value = '';
    /**
     * Indicates whether the sequence value should cycle through.
     *
     * Generated from protobuf field <code>bool cycle = 5;</code>
     */
    private $cycle = false;
    /**
     * Indicates number of entries to cache / precreate.
     *
     * Generated from protobuf field <code>int64 cache = 6;</code>
     */
    private $cache = 0;
    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 7;</code>
     */
    private $custom_features = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $increment
     *           Increment value for the sequence.
     *     @type string $start_value
     *           Start number for the sequence represented as bytes to accommodate large.
     *           numbers
     *     @type string $max_value
     *           Maximum number for the sequence represented as bytes to accommodate large.
     *           numbers
     *     @type string $min_value
     *           Minimum number for the sequence represented as bytes to accommodate large.
     *           numbers
     *     @type bool $cycle
     *           Indicates whether the sequence value should cycle through.
     *     @type int|string $cache
     *           Indicates number of entries to cache / precreate.
     *     @type \Google\Protobuf\Struct $custom_features
     *           Custom engine specific features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Increment value for the sequence.
     *
     * Generated from protobuf field <code>int64 increment = 1;</code>
     * @return int|string
     */
    public function getIncrement()
    {
        return $this->increment;
    }

    /**
     * Increment value for the sequence.
     *
     * Generated from protobuf field <code>int64 increment = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIncrement($var)
    {
        GPBUtil::checkInt64($var);
        $this->increment = $var;

        return $this;
    }

    /**
     * Start number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes start_value = 2;</code>
     * @return string
     */
    public function getStartValue()
    {
        return $this->start_value;
    }

    /**
     * Start number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes start_value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->start_value = $var;

        return $this;
    }

    /**
     * Maximum number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes max_value = 3;</code>
     * @return string
     */
    public function getMaxValue()
    {
        return $this->max_value;
    }

    /**
     * Maximum number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes max_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMaxValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->max_value = $var;

        return $this;
    }

    /**
     * Minimum number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes min_value = 4;</code>
     * @return string
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    /**
     * Minimum number for the sequence represented as bytes to accommodate large.
     * numbers
     *
     * Generated from protobuf field <code>bytes min_value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->min_value = $var;

        return $this;
    }

    /**
     * Indicates whether the sequence value should cycle through.
     *
     * Generated from protobuf field <code>bool cycle = 5;</code>
     * @return bool
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Indicates whether the sequence value should cycle through.
     *
     * Generated from protobuf field <code>bool cycle = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCycle($var)
    {
        GPBUtil::checkBool($var);
        $this->cycle = $var;

        return $this;
    }

    /**
     * Indicates number of entries to cache / precreate.
     *
     * Generated from protobuf field <code>int64 cache = 6;</code>
     * @return int|string
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * Indicates number of entries to cache / precreate.
     *
     * Generated from protobuf field <code>int64 cache = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCache($var)
    {
        GPBUtil::checkInt64($var);
        $this->cache = $var;

        return $this;
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 7;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getCustomFeatures()
    {
        return $this->custom_features;
    }

    public function hasCustomFeatures()
    {
        return isset($this->custom_features);
    }

    public function clearCustomFeatures()
    {
        unset($this->custom_features);
    }

    /**
     * Custom engine specific features.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct custom_features = 7;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCustomFeatures($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->custom_features = $var;

        return $this;
    }

}
