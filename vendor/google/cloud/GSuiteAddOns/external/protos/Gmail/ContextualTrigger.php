<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/gmail/gmail_addon_manifest.proto

namespace Google\Apps\Script\Type\Gmail;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a trigger that fires when the open email meets a specific criteria.
 * When the trigger fires, it executes a specific endpoint, usually
 * in order to create new cards and update the UI.
 *
 * Generated from protobuf message <code>google.apps.script.type.gmail.ContextualTrigger</code>
 */
class ContextualTrigger extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the endpoint to call when a message matches the
     * trigger.
     *
     * Generated from protobuf field <code>string on_trigger_function = 4;</code>
     */
    protected $on_trigger_function = '';
    protected $trigger;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Script\Type\Gmail\UnconditionalTrigger $unconditional
     *           UnconditionalTriggers are executed when any mail message is opened.
     *     @type string $on_trigger_function
     *           Required. The name of the endpoint to call when a message matches the
     *           trigger.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Script\Type\Gmail\GmailAddonManifest::initOnce();
        parent::__construct($data);
    }

    /**
     * UnconditionalTriggers are executed when any mail message is opened.
     *
     * Generated from protobuf field <code>.google.apps.script.type.gmail.UnconditionalTrigger unconditional = 1;</code>
     * @return \Google\Apps\Script\Type\Gmail\UnconditionalTrigger|null
     */
    public function getUnconditional()
    {
        return $this->readOneof(1);
    }

    public function hasUnconditional()
    {
        return $this->hasOneof(1);
    }

    /**
     * UnconditionalTriggers are executed when any mail message is opened.
     *
     * Generated from protobuf field <code>.google.apps.script.type.gmail.UnconditionalTrigger unconditional = 1;</code>
     * @param \Google\Apps\Script\Type\Gmail\UnconditionalTrigger $var
     * @return $this
     */
    public function setUnconditional($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Gmail\UnconditionalTrigger::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Required. The name of the endpoint to call when a message matches the
     * trigger.
     *
     * Generated from protobuf field <code>string on_trigger_function = 4;</code>
     * @return string
     */
    public function getOnTriggerFunction()
    {
        return $this->on_trigger_function;
    }

    /**
     * Required. The name of the endpoint to call when a message matches the
     * trigger.
     *
     * Generated from protobuf field <code>string on_trigger_function = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOnTriggerFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->on_trigger_function = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrigger()
    {
        return $this->whichOneof("trigger");
    }

}
