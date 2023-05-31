<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetAzureServerConfigRequest gets the server config of GKE cluster on Azure.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.GetAzureServerConfigRequest</code>
 */
class GetAzureServerConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the
     * [AzureServerConfig][google.cloud.gkemulticloud.v1.AzureServerConfig]
     * resource to describe.
     * `AzureServerConfig` names are formatted as
     * `projects/<project-id>/locations/<region>/azureServerConfig`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the
     *                     [AzureServerConfig][google.cloud.gkemulticloud.v1.AzureServerConfig]
     *                     resource to describe.
     *
     *                     `AzureServerConfig` names are formatted as
     *                     `projects/<project-id>/locations/<region>/azureServerConfig`.
     *
     *                     See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *                     for more details on Google Cloud resource names. Please see
     *                     {@see AzureClustersClient::azureServerConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\GetAzureServerConfigRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the
     *           [AzureServerConfig][google.cloud.gkemulticloud.v1.AzureServerConfig]
     *           resource to describe.
     *           `AzureServerConfig` names are formatted as
     *           `projects/<project-id>/locations/<region>/azureServerConfig`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the
     * [AzureServerConfig][google.cloud.gkemulticloud.v1.AzureServerConfig]
     * resource to describe.
     * `AzureServerConfig` names are formatted as
     * `projects/<project-id>/locations/<region>/azureServerConfig`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the
     * [AzureServerConfig][google.cloud.gkemulticloud.v1.AzureServerConfig]
     * resource to describe.
     * `AzureServerConfig` names are formatted as
     * `projects/<project-id>/locations/<region>/azureServerConfig`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

