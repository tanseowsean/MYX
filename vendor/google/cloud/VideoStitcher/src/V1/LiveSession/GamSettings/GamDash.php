<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/sessions.proto

namespace Google\Cloud\Video\Stitcher\V1\LiveSession\GamSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GamDash is a container for any DASH specific input fields for GAM
 * Live Stitching.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.LiveSession.GamSettings.GamDash</code>
 */
class GamDash extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session template url by Ad Manager for DASH periods.
     *
     * Generated from protobuf field <code>string period_template_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $period_template_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $period_template_uri
     *           Required. The session template url by Ad Manager for DASH periods.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The session template url by Ad Manager for DASH periods.
     *
     * Generated from protobuf field <code>string period_template_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPeriodTemplateUri()
    {
        return $this->period_template_uri;
    }

    /**
     * Required. The session template url by Ad Manager for DASH periods.
     *
     * Generated from protobuf field <code>string period_template_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPeriodTemplateUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->period_template_uri = $var;

        return $this;
    }

}


