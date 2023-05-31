<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/streaming.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes mounted data disk.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.MountedDataDisk</code>
 */
class MountedDataDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the data disk.
     * This name is local to the Google Cloud Platform project and uniquely
     * identifies the disk within that project, for example
     * "myproject-1014-104817-4c2-harness-0-disk-1".
     *
     * Generated from protobuf field <code>string data_disk = 1;</code>
     */
    private $data_disk = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data_disk
     *           The name of the data disk.
     *           This name is local to the Google Cloud Platform project and uniquely
     *           identifies the disk within that project, for example
     *           "myproject-1014-104817-4c2-harness-0-disk-1".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Streaming::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the data disk.
     * This name is local to the Google Cloud Platform project and uniquely
     * identifies the disk within that project, for example
     * "myproject-1014-104817-4c2-harness-0-disk-1".
     *
     * Generated from protobuf field <code>string data_disk = 1;</code>
     * @return string
     */
    public function getDataDisk()
    {
        return $this->data_disk;
    }

    /**
     * The name of the data disk.
     * This name is local to the Google Cloud Platform project and uniquely
     * identifies the disk within that project, for example
     * "myproject-1014-104817-4c2-harness-0-disk-1".
     *
     * Generated from protobuf field <code>string data_disk = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDataDisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_disk = $var;

        return $this;
    }

}
