<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for response of creating repositories in batch.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.BatchCreateRepositoriesResponse</code>
 */
class BatchCreateRepositoriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Repository resources created.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v2.Repository repositories = 1;</code>
     */
    private $repositories;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Build\V2\Repository>|\Google\Protobuf\Internal\RepeatedField $repositories
     *           Repository resources created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Repository resources created.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v2.Repository repositories = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRepositories()
    {
        return $this->repositories;
    }

    /**
     * Repository resources created.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v2.Repository repositories = 1;</code>
     * @param array<\Google\Cloud\Build\V2\Repository>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRepositories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Build\V2\Repository::class);
        $this->repositories = $arr;

        return $this;
    }

}

