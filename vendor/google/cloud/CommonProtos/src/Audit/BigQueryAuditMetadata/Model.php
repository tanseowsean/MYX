<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Trained BigQuery ML model.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.Model</code>
 */
class Model extends \Google\Protobuf\Internal\Message
{
    /**
     * Model URI.
     * Format: `projects/<project_id>/datasets/<dataset_id>/models/<model_id>`.
     *
     * Generated from protobuf field <code>string model_name = 1;</code>
     */
    protected $model_name = '';
    /**
     * User-provided metadata for the model.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.EntityInfo model_info = 2;</code>
     */
    protected $model_info = null;
    /**
     * Model expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5;</code>
     */
    protected $expire_time = null;
    /**
     * Model creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    protected $create_time = null;
    /**
     * Model last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     */
    protected $update_time = null;
    /**
     * Model encryption information. Set when non-default encryption is used.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.EncryptionInfo encryption = 8;</code>
     */
    protected $encryption = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $model_name
     *           Model URI.
     *           Format: `projects/<project_id>/datasets/<dataset_id>/models/<model_id>`.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\EntityInfo $model_info
     *           User-provided metadata for the model.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Model expiration time.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Model creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Model last update time.
     *     @type \Google\Cloud\Audit\BigQueryAuditMetadata\EncryptionInfo $encryption
     *           Model encryption information. Set when non-default encryption is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * Model URI.
     * Format: `projects/<project_id>/datasets/<dataset_id>/models/<model_id>`.
     *
     * Generated from protobuf field <code>string model_name = 1;</code>
     * @return string
     */
    public function getModelName()
    {
        return $this->model_name;
    }

    /**
     * Model URI.
     * Format: `projects/<project_id>/datasets/<dataset_id>/models/<model_id>`.
     *
     * Generated from protobuf field <code>string model_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setModelName($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_name = $var;

        return $this;
    }

    /**
     * User-provided metadata for the model.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.EntityInfo model_info = 2;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\EntityInfo|null
     */
    public function getModelInfo()
    {
        return $this->model_info;
    }

    public function hasModelInfo()
    {
        return isset($this->model_info);
    }

    public function clearModelInfo()
    {
        unset($this->model_info);
    }

    /**
     * User-provided metadata for the model.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.EntityInfo model_info = 2;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\EntityInfo $var
     * @return $this
     */
    public function setModelInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\EntityInfo::class);
        $this->model_info = $var;

        return $this;
    }

    /**
     * Model expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Model expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Model creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Model creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Model last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Model last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Model encryption information. Set when non-default encryption is used.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.EncryptionInfo encryption = 8;</code>
     * @return \Google\Cloud\Audit\BigQueryAuditMetadata\EncryptionInfo|null
     */
    public function getEncryption()
    {
        return $this->encryption;
    }

    public function hasEncryption()
    {
        return isset($this->encryption);
    }

    public function clearEncryption()
    {
        unset($this->encryption);
    }

    /**
     * Model encryption information. Set when non-default encryption is used.
     *
     * Generated from protobuf field <code>.google.cloud.audit.BigQueryAuditMetadata.EncryptionInfo encryption = 8;</code>
     * @param \Google\Cloud\Audit\BigQueryAuditMetadata\EncryptionInfo $var
     * @return $this
     */
    public function setEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\BigQueryAuditMetadata\EncryptionInfo::class);
        $this->encryption = $var;

        return $this;
    }

}


