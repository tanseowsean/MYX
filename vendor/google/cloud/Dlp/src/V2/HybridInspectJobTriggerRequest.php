<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to search for potentially sensitive info in a custom location.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.HybridInspectJobTriggerRequest</code>
 */
class HybridInspectJobTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the trigger to execute a hybrid inspect on, for example
     * `projects/dlp-test-project/jobTriggers/53234423`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.HybridContentItem hybrid_item = 3;</code>
     */
    private $hybrid_item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the trigger to execute a hybrid inspect on, for example
     *           `projects/dlp-test-project/jobTriggers/53234423`.
     *     @type \Google\Cloud\Dlp\V2\HybridContentItem $hybrid_item
     *           The item to inspect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the trigger to execute a hybrid inspect on, for example
     * `projects/dlp-test-project/jobTriggers/53234423`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the trigger to execute a hybrid inspect on, for example
     * `projects/dlp-test-project/jobTriggers/53234423`.
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

    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.HybridContentItem hybrid_item = 3;</code>
     * @return \Google\Cloud\Dlp\V2\HybridContentItem|null
     */
    public function getHybridItem()
    {
        return $this->hybrid_item;
    }

    public function hasHybridItem()
    {
        return isset($this->hybrid_item);
    }

    public function clearHybridItem()
    {
        unset($this->hybrid_item);
    }

    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.HybridContentItem hybrid_item = 3;</code>
     * @param \Google\Cloud\Dlp\V2\HybridContentItem $var
     * @return $this
     */
    public function setHybridItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\HybridContentItem::class);
        $this->hybrid_item = $var;

        return $this;
    }

}

