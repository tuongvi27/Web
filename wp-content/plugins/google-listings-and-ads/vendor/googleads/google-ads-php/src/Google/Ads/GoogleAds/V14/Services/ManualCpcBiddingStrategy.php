<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manual CPC Bidding Strategy.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.ManualCpcBiddingStrategy</code>
 */
class ManualCpcBiddingStrategy extends \Google\Protobuf\Internal\Message
{
    /**
     * Campaign level budget in micros. If set, a minimum value
     * is enforced for the local currency used in the campaign. An error
     * will occur showing the minimum value if this field is set too low.
     *
     * Generated from protobuf field <code>optional int64 daily_budget_micros = 1;</code>
     */
    protected $daily_budget_micros = null;
    /**
     * Required. A bid in micros to be applied to ad groups within the campaign
     * for a manual CPC bidding strategy.
     *
     * Generated from protobuf field <code>int64 max_cpc_bid_micros = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $max_cpc_bid_micros = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $daily_budget_micros
     *           Campaign level budget in micros. If set, a minimum value
     *           is enforced for the local currency used in the campaign. An error
     *           will occur showing the minimum value if this field is set too low.
     *     @type int|string $max_cpc_bid_micros
     *           Required. A bid in micros to be applied to ad groups within the campaign
     *           for a manual CPC bidding strategy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Campaign level budget in micros. If set, a minimum value
     * is enforced for the local currency used in the campaign. An error
     * will occur showing the minimum value if this field is set too low.
     *
     * Generated from protobuf field <code>optional int64 daily_budget_micros = 1;</code>
     * @return int|string
     */
    public function getDailyBudgetMicros()
    {
        return isset($this->daily_budget_micros) ? $this->daily_budget_micros : 0;
    }

    public function hasDailyBudgetMicros()
    {
        return isset($this->daily_budget_micros);
    }

    public function clearDailyBudgetMicros()
    {
        unset($this->daily_budget_micros);
    }

    /**
     * Campaign level budget in micros. If set, a minimum value
     * is enforced for the local currency used in the campaign. An error
     * will occur showing the minimum value if this field is set too low.
     *
     * Generated from protobuf field <code>optional int64 daily_budget_micros = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDailyBudgetMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->daily_budget_micros = $var;

        return $this;
    }

    /**
     * Required. A bid in micros to be applied to ad groups within the campaign
     * for a manual CPC bidding strategy.
     *
     * Generated from protobuf field <code>int64 max_cpc_bid_micros = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getMaxCpcBidMicros()
    {
        return $this->max_cpc_bid_micros;
    }

    /**
     * Required. A bid in micros to be applied to ad groups within the campaign
     * for a manual CPC bidding strategy.
     *
     * Generated from protobuf field <code>int64 max_cpc_bid_micros = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_cpc_bid_micros = $var;

        return $this;
    }

}

