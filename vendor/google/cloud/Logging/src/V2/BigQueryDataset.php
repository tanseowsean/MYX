<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a BigQuery dataset that was created by a link.
 *
 * Generated from protobuf message <code>google.logging.v2.BigQueryDataset</code>
 */
class BigQueryDataset extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The full resource name of the BigQuery dataset. The DATASET_ID
     * will match the ID of the link, so the link must match the naming
     * restrictions of BigQuery datasets (alphanumeric characters and underscores
     * only).
     * The dataset will have a resource path of
     *   "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET_ID]"
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $dataset_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset_id
     *           Output only. The full resource name of the BigQuery dataset. The DATASET_ID
     *           will match the ID of the link, so the link must match the naming
     *           restrictions of BigQuery datasets (alphanumeric characters and underscores
     *           only).
     *           The dataset will have a resource path of
     *             "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET_ID]"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The full resource name of the BigQuery dataset. The DATASET_ID
     * will match the ID of the link, so the link must match the naming
     * restrictions of BigQuery datasets (alphanumeric characters and underscores
     * only).
     * The dataset will have a resource path of
     *   "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET_ID]"
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Output only. The full resource name of the BigQuery dataset. The DATASET_ID
     * will match the ID of the link, so the link must match the naming
     * restrictions of BigQuery datasets (alphanumeric characters and underscores
     * only).
     * The dataset will have a resource path of
     *   "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET_ID]"
     *
     * Generated from protobuf field <code>string dataset_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

}

