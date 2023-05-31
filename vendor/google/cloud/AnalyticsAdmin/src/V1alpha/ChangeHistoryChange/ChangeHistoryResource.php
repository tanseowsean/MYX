<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\ChangeHistoryChange;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A snapshot of a resource as before or after the result of a change in
 * change history.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ChangeHistoryChange.ChangeHistoryResource</code>
 */
class ChangeHistoryResource extends \Google\Protobuf\Internal\Message
{
    protected $resource;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\Account $account
     *           A snapshot of an Account resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\Property $property
     *           A snapshot of a Property resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\FirebaseLink $firebase_link
     *           A snapshot of a FirebaseLink resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\GoogleAdsLink $google_ads_link
     *           A snapshot of a GoogleAdsLink resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings $google_signals_settings
     *           A snapshot of a GoogleSignalsSettings resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink $display_video_360_advertiser_link
     *           A snapshot of a DisplayVideo360AdvertiserLink resource in change
     *           history.
     *     @type \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal $display_video_360_advertiser_link_proposal
     *           A snapshot of a DisplayVideo360AdvertiserLinkProposal resource in
     *           change history.
     *     @type \Google\Analytics\Admin\V1alpha\ConversionEvent $conversion_event
     *           A snapshot of a ConversionEvent resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $measurement_protocol_secret
     *           A snapshot of a MeasurementProtocolSecret resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\CustomDimension $custom_dimension
     *           A snapshot of a CustomDimension resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\CustomMetric $custom_metric
     *           A snapshot of a CustomMetric resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\DataRetentionSettings $data_retention_settings
     *           A snapshot of a data retention settings resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\SearchAds360Link $search_ads_360_link
     *           A snapshot of a SearchAds360Link resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\DataStream $data_stream
     *           A snapshot of a DataStream resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\AttributionSettings $attribution_settings
     *           A snapshot of AttributionSettings resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\ExpandedDataSet $expanded_data_set
     *           A snapshot of an ExpandedDataSet resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\ChannelGroup $channel_group
     *           A snapshot of a ChannelGroup resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\BigQueryLink $bigquery_link
     *           A snapshot of a BigQuery link resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings $enhanced_measurement_settings
     *           A snapshot of EnhancedMeasurementSettings resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\AdSenseLink $adsense_link
     *           A snapshot of an AdSenseLink resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\Audience $audience
     *           A snapshot of an Audience resource in change history.
     *     @type \Google\Analytics\Admin\V1alpha\EventCreateRule $event_create_rule
     *           A snapshot of an EventCreateRule resource in change history.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A snapshot of an Account resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\Account|null
     */
    public function getAccount()
    {
        return $this->readOneof(1);
    }

    public function hasAccount()
    {
        return $this->hasOneof(1);
    }

    /**
     * A snapshot of an Account resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Account account = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\Account $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Account::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A snapshot of a Property resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Property property = 2;</code>
     * @return \Google\Analytics\Admin\V1alpha\Property|null
     */
    public function getProperty()
    {
        return $this->readOneof(2);
    }

    public function hasProperty()
    {
        return $this->hasOneof(2);
    }

    /**
     * A snapshot of a Property resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Property property = 2;</code>
     * @param \Google\Analytics\Admin\V1alpha\Property $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Property::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A snapshot of a FirebaseLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.FirebaseLink firebase_link = 6;</code>
     * @return \Google\Analytics\Admin\V1alpha\FirebaseLink|null
     */
    public function getFirebaseLink()
    {
        return $this->readOneof(6);
    }

    public function hasFirebaseLink()
    {
        return $this->hasOneof(6);
    }

    /**
     * A snapshot of a FirebaseLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.FirebaseLink firebase_link = 6;</code>
     * @param \Google\Analytics\Admin\V1alpha\FirebaseLink $var
     * @return $this
     */
    public function setFirebaseLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\FirebaseLink::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A snapshot of a GoogleAdsLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 7;</code>
     * @return \Google\Analytics\Admin\V1alpha\GoogleAdsLink|null
     */
    public function getGoogleAdsLink()
    {
        return $this->readOneof(7);
    }

    public function hasGoogleAdsLink()
    {
        return $this->hasOneof(7);
    }

    /**
     * A snapshot of a GoogleAdsLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 7;</code>
     * @param \Google\Analytics\Admin\V1alpha\GoogleAdsLink $var
     * @return $this
     */
    public function setGoogleAdsLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\GoogleAdsLink::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A snapshot of a GoogleSignalsSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleSignalsSettings google_signals_settings = 8;</code>
     * @return \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings|null
     */
    public function getGoogleSignalsSettings()
    {
        return $this->readOneof(8);
    }

    public function hasGoogleSignalsSettings()
    {
        return $this->hasOneof(8);
    }

    /**
     * A snapshot of a GoogleSignalsSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleSignalsSettings google_signals_settings = 8;</code>
     * @param \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings $var
     * @return $this
     */
    public function setGoogleSignalsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\GoogleSignalsSettings::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A snapshot of a DisplayVideo360AdvertiserLink resource in change
     * history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLink display_video_360_advertiser_link = 9;</code>
     * @return \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink|null
     */
    public function getDisplayVideo360AdvertiserLink()
    {
        return $this->readOneof(9);
    }

    public function hasDisplayVideo360AdvertiserLink()
    {
        return $this->hasOneof(9);
    }

    /**
     * A snapshot of a DisplayVideo360AdvertiserLink resource in change
     * history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLink display_video_360_advertiser_link = 9;</code>
     * @param \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink $var
     * @return $this
     */
    public function setDisplayVideo360AdvertiserLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLink::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * A snapshot of a DisplayVideo360AdvertiserLinkProposal resource in
     * change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkProposal display_video_360_advertiser_link_proposal = 10;</code>
     * @return \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal|null
     */
    public function getDisplayVideo360AdvertiserLinkProposal()
    {
        return $this->readOneof(10);
    }

    public function hasDisplayVideo360AdvertiserLinkProposal()
    {
        return $this->hasOneof(10);
    }

    /**
     * A snapshot of a DisplayVideo360AdvertiserLinkProposal resource in
     * change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DisplayVideo360AdvertiserLinkProposal display_video_360_advertiser_link_proposal = 10;</code>
     * @param \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal $var
     * @return $this
     */
    public function setDisplayVideo360AdvertiserLinkProposal($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\DisplayVideo360AdvertiserLinkProposal::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * A snapshot of a ConversionEvent resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent conversion_event = 11;</code>
     * @return \Google\Analytics\Admin\V1alpha\ConversionEvent|null
     */
    public function getConversionEvent()
    {
        return $this->readOneof(11);
    }

    public function hasConversionEvent()
    {
        return $this->hasOneof(11);
    }

    /**
     * A snapshot of a ConversionEvent resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ConversionEvent conversion_event = 11;</code>
     * @param \Google\Analytics\Admin\V1alpha\ConversionEvent $var
     * @return $this
     */
    public function setConversionEvent($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ConversionEvent::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A snapshot of a MeasurementProtocolSecret resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 12;</code>
     * @return \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret|null
     */
    public function getMeasurementProtocolSecret()
    {
        return $this->readOneof(12);
    }

    public function hasMeasurementProtocolSecret()
    {
        return $this->hasOneof(12);
    }

    /**
     * A snapshot of a MeasurementProtocolSecret resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.MeasurementProtocolSecret measurement_protocol_secret = 12;</code>
     * @param \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret $var
     * @return $this
     */
    public function setMeasurementProtocolSecret($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\MeasurementProtocolSecret::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * A snapshot of a CustomDimension resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 13;</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomDimension|null
     */
    public function getCustomDimension()
    {
        return $this->readOneof(13);
    }

    public function hasCustomDimension()
    {
        return $this->hasOneof(13);
    }

    /**
     * A snapshot of a CustomDimension resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomDimension custom_dimension = 13;</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomDimension $var
     * @return $this
     */
    public function setCustomDimension($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\CustomDimension::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * A snapshot of a CustomMetric resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 14;</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomMetric|null
     */
    public function getCustomMetric()
    {
        return $this->readOneof(14);
    }

    public function hasCustomMetric()
    {
        return $this->hasOneof(14);
    }

    /**
     * A snapshot of a CustomMetric resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 14;</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomMetric $var
     * @return $this
     */
    public function setCustomMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\CustomMetric::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * A snapshot of a data retention settings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DataRetentionSettings data_retention_settings = 15;</code>
     * @return \Google\Analytics\Admin\V1alpha\DataRetentionSettings|null
     */
    public function getDataRetentionSettings()
    {
        return $this->readOneof(15);
    }

    public function hasDataRetentionSettings()
    {
        return $this->hasOneof(15);
    }

    /**
     * A snapshot of a data retention settings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DataRetentionSettings data_retention_settings = 15;</code>
     * @param \Google\Analytics\Admin\V1alpha\DataRetentionSettings $var
     * @return $this
     */
    public function setDataRetentionSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\DataRetentionSettings::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * A snapshot of a SearchAds360Link resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SearchAds360Link search_ads_360_link = 16;</code>
     * @return \Google\Analytics\Admin\V1alpha\SearchAds360Link|null
     */
    public function getSearchAds360Link()
    {
        return $this->readOneof(16);
    }

    public function hasSearchAds360Link()
    {
        return $this->hasOneof(16);
    }

    /**
     * A snapshot of a SearchAds360Link resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SearchAds360Link search_ads_360_link = 16;</code>
     * @param \Google\Analytics\Admin\V1alpha\SearchAds360Link $var
     * @return $this
     */
    public function setSearchAds360Link($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\SearchAds360Link::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * A snapshot of a DataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DataStream data_stream = 18;</code>
     * @return \Google\Analytics\Admin\V1alpha\DataStream|null
     */
    public function getDataStream()
    {
        return $this->readOneof(18);
    }

    public function hasDataStream()
    {
        return $this->hasOneof(18);
    }

    /**
     * A snapshot of a DataStream resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.DataStream data_stream = 18;</code>
     * @param \Google\Analytics\Admin\V1alpha\DataStream $var
     * @return $this
     */
    public function setDataStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\DataStream::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * A snapshot of AttributionSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AttributionSettings attribution_settings = 20;</code>
     * @return \Google\Analytics\Admin\V1alpha\AttributionSettings|null
     */
    public function getAttributionSettings()
    {
        return $this->readOneof(20);
    }

    public function hasAttributionSettings()
    {
        return $this->hasOneof(20);
    }

    /**
     * A snapshot of AttributionSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AttributionSettings attribution_settings = 20;</code>
     * @param \Google\Analytics\Admin\V1alpha\AttributionSettings $var
     * @return $this
     */
    public function setAttributionSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AttributionSettings::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * A snapshot of an ExpandedDataSet resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ExpandedDataSet expanded_data_set = 21;</code>
     * @return \Google\Analytics\Admin\V1alpha\ExpandedDataSet|null
     */
    public function getExpandedDataSet()
    {
        return $this->readOneof(21);
    }

    public function hasExpandedDataSet()
    {
        return $this->hasOneof(21);
    }

    /**
     * A snapshot of an ExpandedDataSet resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ExpandedDataSet expanded_data_set = 21;</code>
     * @param \Google\Analytics\Admin\V1alpha\ExpandedDataSet $var
     * @return $this
     */
    public function setExpandedDataSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ExpandedDataSet::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * A snapshot of a ChannelGroup resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChannelGroup channel_group = 22;</code>
     * @return \Google\Analytics\Admin\V1alpha\ChannelGroup|null
     */
    public function getChannelGroup()
    {
        return $this->readOneof(22);
    }

    public function hasChannelGroup()
    {
        return $this->hasOneof(22);
    }

    /**
     * A snapshot of a ChannelGroup resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.ChannelGroup channel_group = 22;</code>
     * @param \Google\Analytics\Admin\V1alpha\ChannelGroup $var
     * @return $this
     */
    public function setChannelGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\ChannelGroup::class);
        $this->writeOneof(22, $var);

        return $this;
    }

    /**
     * A snapshot of a BigQuery link resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.BigQueryLink bigquery_link = 23;</code>
     * @return \Google\Analytics\Admin\V1alpha\BigQueryLink|null
     */
    public function getBigqueryLink()
    {
        return $this->readOneof(23);
    }

    public function hasBigqueryLink()
    {
        return $this->hasOneof(23);
    }

    /**
     * A snapshot of a BigQuery link resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.BigQueryLink bigquery_link = 23;</code>
     * @param \Google\Analytics\Admin\V1alpha\BigQueryLink $var
     * @return $this
     */
    public function setBigqueryLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\BigQueryLink::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * A snapshot of EnhancedMeasurementSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 24;</code>
     * @return \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings|null
     */
    public function getEnhancedMeasurementSettings()
    {
        return $this->readOneof(24);
    }

    public function hasEnhancedMeasurementSettings()
    {
        return $this->hasOneof(24);
    }

    /**
     * A snapshot of EnhancedMeasurementSettings resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EnhancedMeasurementSettings enhanced_measurement_settings = 24;</code>
     * @param \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings $var
     * @return $this
     */
    public function setEnhancedMeasurementSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\EnhancedMeasurementSettings::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * A snapshot of an AdSenseLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AdSenseLink adsense_link = 27;</code>
     * @return \Google\Analytics\Admin\V1alpha\AdSenseLink|null
     */
    public function getAdsenseLink()
    {
        return $this->readOneof(27);
    }

    public function hasAdsenseLink()
    {
        return $this->hasOneof(27);
    }

    /**
     * A snapshot of an AdSenseLink resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AdSenseLink adsense_link = 27;</code>
     * @param \Google\Analytics\Admin\V1alpha\AdSenseLink $var
     * @return $this
     */
    public function setAdsenseLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AdSenseLink::class);
        $this->writeOneof(27, $var);

        return $this;
    }

    /**
     * A snapshot of an Audience resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience audience = 28;</code>
     * @return \Google\Analytics\Admin\V1alpha\Audience|null
     */
    public function getAudience()
    {
        return $this->readOneof(28);
    }

    public function hasAudience()
    {
        return $this->hasOneof(28);
    }

    /**
     * A snapshot of an Audience resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience audience = 28;</code>
     * @param \Google\Analytics\Admin\V1alpha\Audience $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\Audience::class);
        $this->writeOneof(28, $var);

        return $this;
    }

    /**
     * A snapshot of an EventCreateRule resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EventCreateRule event_create_rule = 29;</code>
     * @return \Google\Analytics\Admin\V1alpha\EventCreateRule|null
     */
    public function getEventCreateRule()
    {
        return $this->readOneof(29);
    }

    public function hasEventCreateRule()
    {
        return $this->hasOneof(29);
    }

    /**
     * A snapshot of an EventCreateRule resource in change history.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EventCreateRule event_create_rule = 29;</code>
     * @param \Google\Analytics\Admin\V1alpha\EventCreateRule $var
     * @return $this
     */
    public function setEventCreateRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\EventCreateRule::class);
        $this->writeOneof(29, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->whichOneof("resource");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChangeHistoryResource::class, \Google\Analytics\Admin\V1alpha\ChangeHistoryChange_ChangeHistoryResource::class);

