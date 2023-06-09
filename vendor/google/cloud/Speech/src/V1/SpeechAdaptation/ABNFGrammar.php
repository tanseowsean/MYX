<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/resource.proto

namespace Google\Cloud\Speech\V1\SpeechAdaptation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.speech.v1.SpeechAdaptation.ABNFGrammar</code>
 */
class ABNFGrammar extends \Google\Protobuf\Internal\Message
{
    /**
     * All declarations and rules of an ABNF grammar broken up into multiple
     * strings that will end up concatenated.
     *
     * Generated from protobuf field <code>repeated string abnf_strings = 1;</code>
     */
    private $abnf_strings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $abnf_strings
     *           All declarations and rules of an ABNF grammar broken up into multiple
     *           strings that will end up concatenated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * All declarations and rules of an ABNF grammar broken up into multiple
     * strings that will end up concatenated.
     *
     * Generated from protobuf field <code>repeated string abnf_strings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAbnfStrings()
    {
        return $this->abnf_strings;
    }

    /**
     * All declarations and rules of an ABNF grammar broken up into multiple
     * strings that will end up concatenated.
     *
     * Generated from protobuf field <code>repeated string abnf_strings = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAbnfStrings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->abnf_strings = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ABNFGrammar::class, \Google\Cloud\Speech\V1\SpeechAdaptation_ABNFGrammar::class);

