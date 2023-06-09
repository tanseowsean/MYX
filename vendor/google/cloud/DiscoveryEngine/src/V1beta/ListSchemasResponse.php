<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1beta/schema_service.proto

namespace Google\Cloud\DiscoveryEngine\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SchemaService.ListSchemas][google.cloud.discoveryengine.v1beta.SchemaService.ListSchemas]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1beta.ListSchemasResponse</code>
 */
class ListSchemasResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The [Schema][google.cloud.discoveryengine.v1beta.Schema]s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.Schema schemas = 1;</code>
     */
    private $schemas;
    /**
     * A token that can be sent as
     * [ListSchemasRequest.page_token][google.cloud.discoveryengine.v1beta.ListSchemasRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1beta\Schema>|\Google\Protobuf\Internal\RepeatedField $schemas
     *           The [Schema][google.cloud.discoveryengine.v1beta.Schema]s.
     *     @type string $next_page_token
     *           A token that can be sent as
     *           [ListSchemasRequest.page_token][google.cloud.discoveryengine.v1beta.ListSchemasRequest.page_token]
     *           to retrieve the next page. If this field is omitted, there are no
     *           subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1Beta\SchemaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The [Schema][google.cloud.discoveryengine.v1beta.Schema]s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.Schema schemas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSchemas()
    {
        return $this->schemas;
    }

    /**
     * The [Schema][google.cloud.discoveryengine.v1beta.Schema]s.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1beta.Schema schemas = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1beta\Schema>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSchemas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1beta\Schema::class);
        $this->schemas = $arr;

        return $this;
    }

    /**
     * A token that can be sent as
     * [ListSchemasRequest.page_token][google.cloud.discoveryengine.v1beta.ListSchemasRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token that can be sent as
     * [ListSchemasRequest.page_token][google.cloud.discoveryengine.v1beta.ListSchemasRequest.page_token]
     * to retrieve the next page. If this field is omitted, there are no
     * subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

