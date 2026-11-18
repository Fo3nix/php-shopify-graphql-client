<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySellingPlanAnchor;
use Carbon\Carbon;

/**
 * Represents a fixed selling plan delivery policy.
 */
class ShopifySellingPlanFixedDeliveryPolicy
{
    protected $anchors;
    protected $cutoff;
    protected $fulfillmentExactTime;
    protected $fulfillmentTrigger;
    protected $intent;
    protected $preAnchorBehavior;

    
    /**
     * The specific anchor dates upon which the delivery interval calculations should be made.
     *
     * @return ShopifySellingPlanAnchor[]
     */
    public function getAnchors(): ?array
    {
        return $this->anchors;
    }

    
    /**
     * A buffer period for orders to be included in next fulfillment anchor.
     *
     * @return int
     */
    public function getCutoff(): ?int
    {
        return $this->cutoff;
    }

    
    /**
     * The date and time when the fulfillment should trigger.
     *
     * @return Carbon
     */
    public function getFulfillmentExactTime(): ?Carbon
    {
        return $this->fulfillmentExactTime;
    }

    
    /**
     * What triggers the fulfillment. The value must be one of ANCHOR, ASAP, EXACT_TIME, or UNKNOWN.
     *
     * @return string A ShopifySellingPlanFulfillmentTriggerEnumObject value
     */
    public function getFulfillmentTrigger(): ?string
    {
        return $this->fulfillmentTrigger;
    }

    
    /**
     * Whether the delivery policy is merchant or buyer-centric.
     * Buyer-centric delivery policies state the time when the buyer will receive the goods.
     * Merchant-centric delivery policies state the time when the fulfillment should be started.
     * Currently, only merchant-centric delivery policies are supported.
     *
     * @return string A ShopifySellingPlanFixedDeliveryPolicyIntentEnumObject value
     */
    public function getIntent(): ?string
    {
        return $this->intent;
    }

    
    /**
     * The fulfillment or delivery behavior of the first fulfillment when the order is placed before the anchor. The default value for this field is `ASAP`.
     *
     * @return string A ShopifySellingPlanFixedDeliveryPolicyPreAnchorBehaviorEnumObject value
     */
    public function getPreAnchorBehavior(): ?string
    {
        return $this->preAnchorBehavior;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['anchors']) && $data['anchors'] !== null) {
                $instance->anchors = array_map(function($item) { return ShopifySellingPlanAnchor::fromArray($item); }, $data['anchors']);
            }
            if (isset($data['cutoff']) && $data['cutoff'] !== null) {
                $instance->cutoff = $data['cutoff'];
            }
            if (isset($data['fulfillmentExactTime']) && $data['fulfillmentExactTime'] !== null) {
                $instance->fulfillmentExactTime = new Carbon($data['fulfillmentExactTime']);
            }
            if (isset($data['fulfillmentTrigger']) && $data['fulfillmentTrigger'] !== null) {
                $instance->fulfillmentTrigger = $data['fulfillmentTrigger'];
            }
            if (isset($data['intent']) && $data['intent'] !== null) {
                $instance->intent = $data['intent'];
            }
            if (isset($data['preAnchorBehavior']) && $data['preAnchorBehavior'] !== null) {
                $instance->preAnchorBehavior = $data['preAnchorBehavior'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->anchors !== null) {
                $data['anchors'] = array_map(function($item) { return $item->asArray(); }, $this->anchors);
            }
            if ($this->cutoff !== null) {
                $data['cutoff'] = $this->cutoff;
            }
            if ($this->fulfillmentExactTime !== null) {
                $data['fulfillmentExactTime'] = $this->fulfillmentExactTime->toIso8601String();
            }
            if ($this->fulfillmentTrigger !== null) {
                $data['fulfillmentTrigger'] = $this->fulfillmentTrigger;
            }
            if ($this->intent !== null) {
                $data['intent'] = $this->intent;
            }
            if ($this->preAnchorBehavior !== null) {
                $data['preAnchorBehavior'] = $this->preAnchorBehavior;
            }
            return $data;
        }
}
