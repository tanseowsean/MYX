<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/search_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification to determine under which conditions query expansion should
 * occur.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec</code>
 */
class QueryExpansionSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * The condition under which query expansion should occur. Default to
     * [Condition.DISABLED][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition.DISABLED].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition condition = 1;</code>
     */
    protected $condition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $condition
     *           The condition under which query expansion should occur. Default to
     *           [Condition.DISABLED][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition.DISABLED].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The condition under which query expansion should occur. Default to
     * [Condition.DISABLED][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition.DISABLED].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition condition = 1;</code>
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The condition under which query expansion should occur. Default to
     * [Condition.DISABLED][google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition.DISABLED].
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1beta.SearchRequest.QueryExpansionSpec.Condition condition = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1beta\SearchRequest\QueryExpansionSpec\Condition::class);
        $this->condition = $var;

        return $this;
    }

}


