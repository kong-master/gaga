<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_friend_apply.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * action: api.friend.apply
 *
 * Generated from protobuf message <code>site.ApiFriendApplyRequest</code>
 */
class ApiFriendApplyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string toUserId = 1;</code>
     */
    private $toUserId = '';
    /**
     * Generated from protobuf field <code>string greetings = 2;</code>
     */
    private $greetings = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $toUserId
     *     @type string $greetings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiFriendApply::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string toUserId = 1;</code>
     * @return string
     */
    public function getToUserId()
    {
        return $this->toUserId;
    }

    /**
     * Generated from protobuf field <code>string toUserId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setToUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->toUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string greetings = 2;</code>
     * @return string
     */
    public function getGreetings()
    {
        return $this->greetings;
    }

    /**
     * Generated from protobuf field <code>string greetings = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGreetings($var)
    {
        GPBUtil::checkString($var, True);
        $this->greetings = $var;

        return $this;
    }

}

