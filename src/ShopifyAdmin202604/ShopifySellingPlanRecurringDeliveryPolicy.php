<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanAnchor;
use Carbon\Carbon;

/**
 * Represents a recurring selling plan delivery policy.
 */
class ShopifySellingPlanRecurringDeliveryPolicy
{
    protected $anchors;
    protected $createdAt;
    protected $cutoff;
    protected $intent;
    protected $interval;
    protected $intervalCount;
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
     * The date and time when the selling plan delivery policy was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Number of days which represent a buffer period for orders to be included in a cycle.
     *
     * @return int
     */
    public function getCutoff(): ?int
    {
        return $this->cutoff;
    }

    
    /**
     * Whether the delivery policy is merchant or buyer-centric.
     * Buyer-centric delivery policies state the time when the buyer will receive the goods.
     * Merchant-centric delivery policies state the time when the fulfillment should be started.
     * Currently, only merchant-centric delivery policies are supported.
     *
     * @return string A ShopifySellingPlanRecurringDeliveryPolicyIntentEnumObject value
     */
    public function getIntent(): ?string
    {
        return $this->intent;
    }

    
    /**
     * The delivery frequency, it can be either: day, week, month or year.
     *
     * @return string A ShopifySellingPlanIntervalEnumObject value
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    
    /**
     * The number of intervals between deliveries.
     *
     * @return int
     */
    public function getIntervalCount(): ?int
    {
        return $this->intervalCount;
    }

    
    /**
     * The fulfillment or delivery behavior of the first fulfillment when the order is placed before the anchor. The default value for this field is `ASAP`.
     *
     * @return string A ShopifySellingPlanRecurringDeliveryPolicyPreAnchorBehaviorEnumObject value
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['cutoff']) && $data['cutoff'] !== null) {
                $instance->cutoff = $data['cutoff'];
            }
            if (isset($data['intent']) && $data['intent'] !== null) {
                $instance->intent = $data['intent'];
            }
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['intervalCount']) && $data['intervalCount'] !== null) {
                $instance->intervalCount = $data['intervalCount'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->cutoff !== null) {
                $data['cutoff'] = $this->cutoff;
            }
            if ($this->intent !== null) {
                $data['intent'] = $this->intent;
            }
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->intervalCount !== null) {
                $data['intervalCount'] = $this->intervalCount;
            }
            if ($this->preAnchorBehavior !== null) {
                $data['preAnchorBehavior'] = $this->preAnchorBehavior;
            }
            return $data;
        }
}
