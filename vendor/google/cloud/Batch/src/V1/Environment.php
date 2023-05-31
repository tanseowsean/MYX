<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/batch/v1/task.proto

namespace Google\Cloud\Batch\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Environment describes a collection of environment variables to set when
 * executing Tasks.
 *
 * Generated from protobuf message <code>google.cloud.batch.v1.Environment</code>
 */
class Environment extends \Google\Protobuf\Internal\Message
{
    /**
     * A map of environment variable names to values.
     *
     * Generated from protobuf field <code>map<string, string> variables = 1;</code>
     */
    private $variables;
    /**
     * A map of environment variable names to Secret Manager secret names.
     * The VM will access the named secrets to set the value of each environment
     * variable.
     *
     * Generated from protobuf field <code>map<string, string> secret_variables = 2;</code>
     */
    private $secret_variables;
    /**
     * An encrypted JSON dictionary where the key/value pairs correspond to
     * environment variable names and their values.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.Environment.KMSEnvMap encrypted_variables = 3;</code>
     */
    private $encrypted_variables = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $variables
     *           A map of environment variable names to values.
     *     @type array|\Google\Protobuf\Internal\MapField $secret_variables
     *           A map of environment variable names to Secret Manager secret names.
     *           The VM will access the named secrets to set the value of each environment
     *           variable.
     *     @type \Google\Cloud\Batch\V1\Environment\KMSEnvMap $encrypted_variables
     *           An encrypted JSON dictionary where the key/value pairs correspond to
     *           environment variable names and their values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Batch\V1\Task::initOnce();
        parent::__construct($data);
    }

    /**
     * A map of environment variable names to values.
     *
     * Generated from protobuf field <code>map<string, string> variables = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * A map of environment variable names to values.
     *
     * Generated from protobuf field <code>map<string, string> variables = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->variables = $arr;

        return $this;
    }

    /**
     * A map of environment variable names to Secret Manager secret names.
     * The VM will access the named secrets to set the value of each environment
     * variable.
     *
     * Generated from protobuf field <code>map<string, string> secret_variables = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSecretVariables()
    {
        return $this->secret_variables;
    }

    /**
     * A map of environment variable names to Secret Manager secret names.
     * The VM will access the named secrets to set the value of each environment
     * variable.
     *
     * Generated from protobuf field <code>map<string, string> secret_variables = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSecretVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->secret_variables = $arr;

        return $this;
    }

    /**
     * An encrypted JSON dictionary where the key/value pairs correspond to
     * environment variable names and their values.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.Environment.KMSEnvMap encrypted_variables = 3;</code>
     * @return \Google\Cloud\Batch\V1\Environment\KMSEnvMap|null
     */
    public function getEncryptedVariables()
    {
        return $this->encrypted_variables;
    }

    public function hasEncryptedVariables()
    {
        return isset($this->encrypted_variables);
    }

    public function clearEncryptedVariables()
    {
        unset($this->encrypted_variables);
    }

    /**
     * An encrypted JSON dictionary where the key/value pairs correspond to
     * environment variable names and their values.
     *
     * Generated from protobuf field <code>.google.cloud.batch.v1.Environment.KMSEnvMap encrypted_variables = 3;</code>
     * @param \Google\Cloud\Batch\V1\Environment\KMSEnvMap $var
     * @return $this
     */
    public function setEncryptedVariables($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Batch\V1\Environment\KMSEnvMap::class);
        $this->encrypted_variables = $var;

        return $this;
    }

}
