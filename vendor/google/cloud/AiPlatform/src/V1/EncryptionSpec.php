<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/encryption_spec.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a customer-managed encryption key spec that can be applied to
 * a top-level resource.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.EncryptionSpec</code>
 */
class EncryptionSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Cloud KMS resource identifier of the customer managed
     * encryption key used to protect a resource. Has the form:
     * `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     * The key needs to be in the same region as where the compute resource is
     * created.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kms_key_name
     *           Required. The Cloud KMS resource identifier of the customer managed
     *           encryption key used to protect a resource. Has the form:
     *           `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     *           The key needs to be in the same region as where the compute resource is
     *           created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Cloud KMS resource identifier of the customer managed
     * encryption key used to protect a resource. Has the form:
     * `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     * The key needs to be in the same region as where the compute resource is
     * created.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Required. The Cloud KMS resource identifier of the customer managed
     * encryption key used to protect a resource. Has the form:
     * `projects/my-project/locations/my-region/keyRings/my-kr/cryptoKeys/my-key`.
     * The key needs to be in the same region as where the compute resource is
     * created.
     *
     * Generated from protobuf field <code>string kms_key_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

