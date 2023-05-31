<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'UpdateMigrationJob' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.UpdateMigrationJobRequest</code>
 */
class UpdateMigrationJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten by the
     * update in the conversion workspace resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. The migration job parameters to update.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MigrationJob migration_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $migration_job = null;
    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten by the
     *           update in the conversion workspace resource.
     *     @type \Google\Cloud\CloudDms\V1\MigrationJob $migration_job
     *           Required. The migration job parameters to update.
     *     @type string $request_id
     *           A unique ID used to identify the request. If the server receives two
     *           requests with the same ID, then the second request is ignored.
     *           It is recommended to always set this value to a UUID.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten by the
     * update in the conversion workspace resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten by the
     * update in the conversion workspace resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The migration job parameters to update.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MigrationJob migration_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\MigrationJob|null
     */
    public function getMigrationJob()
    {
        return $this->migration_job;
    }

    public function hasMigrationJob()
    {
        return isset($this->migration_job);
    }

    public function clearMigrationJob()
    {
        unset($this->migration_job);
    }

    /**
     * Required. The migration job parameters to update.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.MigrationJob migration_job = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\MigrationJob $var
     * @return $this
     */
    public function setMigrationJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\MigrationJob::class);
        $this->migration_job = $var;

        return $this;
    }

    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

