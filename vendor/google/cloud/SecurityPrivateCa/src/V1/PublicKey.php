<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [PublicKey][google.cloud.security.privateca.v1.PublicKey] describes a
 * public key.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.PublicKey</code>
 */
class PublicKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A public key. The padding and encoding
     * must match with the `KeyFormat` value specified for the `format` field.
     *
     * Generated from protobuf field <code>bytes key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $key = '';
    /**
     * Required. The format of the public key.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.PublicKey.KeyFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Required. A public key. The padding and encoding
     *           must match with the `KeyFormat` value specified for the `format` field.
     *     @type int $format
     *           Required. The format of the public key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A public key. The padding and encoding
     * must match with the `KeyFormat` value specified for the `format` field.
     *
     * Generated from protobuf field <code>bytes key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. A public key. The padding and encoding
     * must match with the `KeyFormat` value specified for the `format` field.
     *
     * Generated from protobuf field <code>bytes key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->key = $var;

        return $this;
    }

    /**
     * Required. The format of the public key.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.PublicKey.KeyFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Required. The format of the public key.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.PublicKey.KeyFormat format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Security\PrivateCA\V1\PublicKey\KeyFormat::class);
        $this->format = $var;

        return $this;
    }

}

