<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_apikey_registry_service.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `CreatePredictionApiKeyRegistration` method.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.CreatePredictionApiKeyRegistrationRequest</code>
 */
class CreatePredictionApiKeyRegistrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource path.
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The prediction API key registration.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.PredictionApiKeyRegistration prediction_api_key_registration = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $prediction_api_key_registration = null;

    /**
     * @param string                                                                  $parent                       Required. The parent resource path.
     *                                                                                                              `projects/&#42;/locations/global/catalogs/default_catalog/eventStores/default_event_store`. Please see
     *                                                                                                              {@see PredictionApiKeyRegistryClient::eventStoreName()} for help formatting this field.
     * @param \Google\Cloud\RecommendationEngine\V1beta1\PredictionApiKeyRegistration $predictionApiKeyRegistration Required. The prediction API key registration.
     *
     * @return \Google\Cloud\RecommendationEngine\V1beta1\CreatePredictionApiKeyRegistrationRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\RecommendationEngine\V1beta1\PredictionApiKeyRegistration $predictionApiKeyRegistration): self
    {
        return (new self())
            ->setParent($parent)
            ->setPredictionApiKeyRegistration($predictionApiKeyRegistration);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource path.
     *           `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\PredictionApiKeyRegistration $prediction_api_key_registration
     *           Required. The prediction API key registration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\PredictionApikeyRegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource path.
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource path.
     * `projects/&#42;&#47;locations/global/catalogs/default_catalog/eventStores/default_event_store`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The prediction API key registration.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.PredictionApiKeyRegistration prediction_api_key_registration = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\PredictionApiKeyRegistration|null
     */
    public function getPredictionApiKeyRegistration()
    {
        return $this->prediction_api_key_registration;
    }

    public function hasPredictionApiKeyRegistration()
    {
        return isset($this->prediction_api_key_registration);
    }

    public function clearPredictionApiKeyRegistration()
    {
        unset($this->prediction_api_key_registration);
    }

    /**
     * Required. The prediction API key registration.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.PredictionApiKeyRegistration prediction_api_key_registration = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\PredictionApiKeyRegistration $var
     * @return $this
     */
    public function setPredictionApiKeyRegistration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\PredictionApiKeyRegistration::class);
        $this->prediction_api_key_registration = $var;

        return $this;
    }

}
