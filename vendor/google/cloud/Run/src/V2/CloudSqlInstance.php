<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a set of Cloud SQL instances. Each one will be available under
 * /cloudsql/[instance]. Visit
 * https://cloud.google.com/sql/docs/mysql/connect-run for more information on
 * how to connect Cloud SQL and Cloud Run.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.CloudSqlInstance</code>
 */
class CloudSqlInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * The Cloud SQL instance connection names, as can be found in
     * https://console.cloud.google.com/sql/instances. Visit
     * https://cloud.google.com/sql/docs/mysql/connect-run for more information on
     * how to connect Cloud SQL and Cloud Run. Format:
     * {project}:{location}:{instance}
     *
     * Generated from protobuf field <code>repeated string instances = 1;</code>
     */
    private $instances;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $instances
     *           The Cloud SQL instance connection names, as can be found in
     *           https://console.cloud.google.com/sql/instances. Visit
     *           https://cloud.google.com/sql/docs/mysql/connect-run for more information on
     *           how to connect Cloud SQL and Cloud Run. Format:
     *           {project}:{location}:{instance}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * The Cloud SQL instance connection names, as can be found in
     * https://console.cloud.google.com/sql/instances. Visit
     * https://cloud.google.com/sql/docs/mysql/connect-run for more information on
     * how to connect Cloud SQL and Cloud Run. Format:
     * {project}:{location}:{instance}
     *
     * Generated from protobuf field <code>repeated string instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The Cloud SQL instance connection names, as can be found in
     * https://console.cloud.google.com/sql/instances. Visit
     * https://cloud.google.com/sql/docs/mysql/connect-run for more information on
     * how to connect Cloud SQL and Cloud Run. Format:
     * {project}:{location}:{instance}
     *
     * Generated from protobuf field <code>repeated string instances = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instances = $arr;

        return $this;
    }

}

