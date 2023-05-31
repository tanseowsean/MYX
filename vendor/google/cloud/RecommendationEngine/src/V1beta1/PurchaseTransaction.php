<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/user_event.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transaction represents the entire purchase transaction.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.PurchaseTransaction</code>
 */
class PurchaseTransaction extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The transaction ID with a length limit of 128 bytes.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $id = '';
    /**
     * Required. Total revenue or grand total associated with the transaction.
     * This value include shipping, tax, or other adjustments to total revenue
     * that you want to include as part of your revenue calculations. This field
     * is not required if the event type is `refund`.
     *
     * Generated from protobuf field <code>float revenue = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $revenue = 0.0;
    /**
     * Optional. All the taxes associated with the transaction.
     *
     * Generated from protobuf field <code>map<string, float> taxes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $taxes;
    /**
     * Optional. All the costs associated with the product. These can be
     * manufacturing costs, shipping expenses not borne by the end user, or any
     * other costs.
     * Total product cost such that
     *   profit = revenue - (sum(taxes) + sum(costs))
     * If product_cost is not set, then
     *   profit = revenue - tax - shipping - sum(CatalogItem.costs).
     * If CatalogItem.cost is not specified for one of the items, CatalogItem.cost
     * based profit *cannot* be calculated for this Transaction.
     *
     * Generated from protobuf field <code>map<string, float> costs = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $costs;
    /**
     * Required. Currency code. Use three-character ISO-4217 code. This field
     * is not required if the event type is `refund`.
     *
     * Generated from protobuf field <code>string currency_code = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $currency_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Optional. The transaction ID with a length limit of 128 bytes.
     *     @type float $revenue
     *           Required. Total revenue or grand total associated with the transaction.
     *           This value include shipping, tax, or other adjustments to total revenue
     *           that you want to include as part of your revenue calculations. This field
     *           is not required if the event type is `refund`.
     *     @type array|\Google\Protobuf\Internal\MapField $taxes
     *           Optional. All the taxes associated with the transaction.
     *     @type array|\Google\Protobuf\Internal\MapField $costs
     *           Optional. All the costs associated with the product. These can be
     *           manufacturing costs, shipping expenses not borne by the end user, or any
     *           other costs.
     *           Total product cost such that
     *             profit = revenue - (sum(taxes) + sum(costs))
     *           If product_cost is not set, then
     *             profit = revenue - tax - shipping - sum(CatalogItem.costs).
     *           If CatalogItem.cost is not specified for one of the items, CatalogItem.cost
     *           based profit *cannot* be calculated for this Transaction.
     *     @type string $currency_code
     *           Required. Currency code. Use three-character ISO-4217 code. This field
     *           is not required if the event type is `refund`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The transaction ID with a length limit of 128 bytes.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Optional. The transaction ID with a length limit of 128 bytes.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Required. Total revenue or grand total associated with the transaction.
     * This value include shipping, tax, or other adjustments to total revenue
     * that you want to include as part of your revenue calculations. This field
     * is not required if the event type is `refund`.
     *
     * Generated from protobuf field <code>float revenue = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Required. Total revenue or grand total associated with the transaction.
     * This value include shipping, tax, or other adjustments to total revenue
     * that you want to include as part of your revenue calculations. This field
     * is not required if the event type is `refund`.
     *
     * Generated from protobuf field <code>float revenue = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setRevenue($var)
    {
        GPBUtil::checkFloat($var);
        $this->revenue = $var;

        return $this;
    }

    /**
     * Optional. All the taxes associated with the transaction.
     *
     * Generated from protobuf field <code>map<string, float> taxes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Optional. All the taxes associated with the transaction.
     *
     * Generated from protobuf field <code>map<string, float> taxes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTaxes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->taxes = $arr;

        return $this;
    }

    /**
     * Optional. All the costs associated with the product. These can be
     * manufacturing costs, shipping expenses not borne by the end user, or any
     * other costs.
     * Total product cost such that
     *   profit = revenue - (sum(taxes) + sum(costs))
     * If product_cost is not set, then
     *   profit = revenue - tax - shipping - sum(CatalogItem.costs).
     * If CatalogItem.cost is not specified for one of the items, CatalogItem.cost
     * based profit *cannot* be calculated for this Transaction.
     *
     * Generated from protobuf field <code>map<string, float> costs = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * Optional. All the costs associated with the product. These can be
     * manufacturing costs, shipping expenses not borne by the end user, or any
     * other costs.
     * Total product cost such that
     *   profit = revenue - (sum(taxes) + sum(costs))
     * If product_cost is not set, then
     *   profit = revenue - tax - shipping - sum(CatalogItem.costs).
     * If CatalogItem.cost is not specified for one of the items, CatalogItem.cost
     * based profit *cannot* be calculated for this Transaction.
     *
     * Generated from protobuf field <code>map<string, float> costs = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCosts($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->costs = $arr;

        return $this;
    }

    /**
     * Required. Currency code. Use three-character ISO-4217 code. This field
     * is not required if the event type is `refund`.
     *
     * Generated from protobuf field <code>string currency_code = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Required. Currency code. Use three-character ISO-4217 code. This field
     * is not required if the event type is `refund`.
     *
     * Generated from protobuf field <code>string currency_code = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

}

