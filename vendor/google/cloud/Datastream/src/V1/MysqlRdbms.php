<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MySQL database structure
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.MysqlRdbms</code>
 */
class MysqlRdbms extends \Google\Protobuf\Internal\Message
{
    /**
     * Mysql databases on the server
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.MysqlDatabase mysql_databases = 1;</code>
     */
    private $mysql_databases;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Datastream\V1\MysqlDatabase>|\Google\Protobuf\Internal\RepeatedField $mysql_databases
     *           Mysql databases on the server
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Mysql databases on the server
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.MysqlDatabase mysql_databases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMysqlDatabases()
    {
        return $this->mysql_databases;
    }

    /**
     * Mysql databases on the server
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.MysqlDatabase mysql_databases = 1;</code>
     * @param array<\Google\Cloud\Datastream\V1\MysqlDatabase>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMysqlDatabases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\MysqlDatabase::class);
        $this->mysql_databases = $arr;

        return $this;
    }

}
