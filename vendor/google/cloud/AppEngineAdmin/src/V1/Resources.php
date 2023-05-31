<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/version.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Machine resources for a version.
 *
 * Generated from protobuf message <code>google.appengine.v1.Resources</code>
 */
class Resources extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of CPU cores needed.
     *
     * Generated from protobuf field <code>double cpu = 1;</code>
     */
    private $cpu = 0.0;
    /**
     * Disk size (GB) needed.
     *
     * Generated from protobuf field <code>double disk_gb = 2;</code>
     */
    private $disk_gb = 0.0;
    /**
     * Memory (GB) needed.
     *
     * Generated from protobuf field <code>double memory_gb = 3;</code>
     */
    private $memory_gb = 0.0;
    /**
     * User specified volumes.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Volume volumes = 4;</code>
     */
    private $volumes;
    /**
     * The name of the encryption key that is stored in Google Cloud KMS.
     * Only should be used by Cloud Composer to encrypt the vm disk
     *
     * Generated from protobuf field <code>string kms_key_reference = 5;</code>
     */
    private $kms_key_reference = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $cpu
     *           Number of CPU cores needed.
     *     @type float $disk_gb
     *           Disk size (GB) needed.
     *     @type float $memory_gb
     *           Memory (GB) needed.
     *     @type array<\Google\Cloud\AppEngine\V1\Volume>|\Google\Protobuf\Internal\RepeatedField $volumes
     *           User specified volumes.
     *     @type string $kms_key_reference
     *           The name of the encryption key that is stored in Google Cloud KMS.
     *           Only should be used by Cloud Composer to encrypt the vm disk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of CPU cores needed.
     *
     * Generated from protobuf field <code>double cpu = 1;</code>
     * @return float
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Number of CPU cores needed.
     *
     * Generated from protobuf field <code>double cpu = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setCpu($var)
    {
        GPBUtil::checkDouble($var);
        $this->cpu = $var;

        return $this;
    }

    /**
     * Disk size (GB) needed.
     *
     * Generated from protobuf field <code>double disk_gb = 2;</code>
     * @return float
     */
    public function getDiskGb()
    {
        return $this->disk_gb;
    }

    /**
     * Disk size (GB) needed.
     *
     * Generated from protobuf field <code>double disk_gb = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDiskGb($var)
    {
        GPBUtil::checkDouble($var);
        $this->disk_gb = $var;

        return $this;
    }

    /**
     * Memory (GB) needed.
     *
     * Generated from protobuf field <code>double memory_gb = 3;</code>
     * @return float
     */
    public function getMemoryGb()
    {
        return $this->memory_gb;
    }

    /**
     * Memory (GB) needed.
     *
     * Generated from protobuf field <code>double memory_gb = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setMemoryGb($var)
    {
        GPBUtil::checkDouble($var);
        $this->memory_gb = $var;

        return $this;
    }

    /**
     * User specified volumes.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Volume volumes = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * User specified volumes.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.Volume volumes = 4;</code>
     * @param array<\Google\Cloud\AppEngine\V1\Volume>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AppEngine\V1\Volume::class);
        $this->volumes = $arr;

        return $this;
    }

    /**
     * The name of the encryption key that is stored in Google Cloud KMS.
     * Only should be used by Cloud Composer to encrypt the vm disk
     *
     * Generated from protobuf field <code>string kms_key_reference = 5;</code>
     * @return string
     */
    public function getKmsKeyReference()
    {
        return $this->kms_key_reference;
    }

    /**
     * The name of the encryption key that is stored in Google Cloud KMS.
     * Only should be used by Cloud Composer to encrypt the vm disk
     *
     * Generated from protobuf field <code>string kms_key_reference = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyReference($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_reference = $var;

        return $this;
    }

}
