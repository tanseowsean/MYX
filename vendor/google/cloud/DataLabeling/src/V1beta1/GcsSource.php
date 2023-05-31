<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/dataset.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Source of the Cloud Storage file to be imported.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.GcsSource</code>
 */
class GcsSource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The input URI of source file. This must be a Cloud Storage path
     * (`gs://...`).
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     */
    private $input_uri = '';
    /**
     * Required. The format of the source file. Only "text/csv" is supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    private $mime_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_uri
     *           Required. The input URI of source file. This must be a Cloud Storage path
     *           (`gs://...`).
     *     @type string $mime_type
     *           Required. The format of the source file. Only "text/csv" is supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The input URI of source file. This must be a Cloud Storage path
     * (`gs://...`).
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     * @return string
     */
    public function getInputUri()
    {
        return $this->input_uri;
    }

    /**
     * Required. The input URI of source file. This must be a Cloud Storage path
     * (`gs://...`).
     *
     * Generated from protobuf field <code>string input_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_uri = $var;

        return $this;
    }

    /**
     * Required. The format of the source file. Only "text/csv" is supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Required. The format of the source file. Only "text/csv" is supported.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

}

