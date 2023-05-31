<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1\AudioStream;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The mapping for the `Job.edit_list` atoms with audio `EditAtom.inputs`.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.AudioStream.AudioAtom</code>
 */
class AudioAtom extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `EditAtom.key` that references the atom with audio inputs in the
     * `Job.edit_list`.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $key = '';
    /**
     * List of `Channel`s for this audio stream.
     * for in-depth explanation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.AudioStream.AudioAtom.AudioChannel channels = 2;</code>
     */
    private $channels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Required. The `EditAtom.key` that references the atom with audio inputs in the
     *           `Job.edit_list`.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\AudioStream\AudioAtom\AudioChannel[]|\Google\Protobuf\Internal\RepeatedField $channels
     *           List of `Channel`s for this audio stream.
     *           for in-depth explanation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `EditAtom.key` that references the atom with audio inputs in the
     * `Job.edit_list`.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. The `EditAtom.key` that references the atom with audio inputs in the
     * `Job.edit_list`.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * List of `Channel`s for this audio stream.
     * for in-depth explanation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.AudioStream.AudioAtom.AudioChannel channels = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * List of `Channel`s for this audio stream.
     * for in-depth explanation.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1beta1.AudioStream.AudioAtom.AudioChannel channels = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\AudioStream\AudioAtom\AudioChannel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1beta1\AudioStream\AudioAtom\AudioChannel::class);
        $this->channels = $arr;

        return $this;
    }

}


