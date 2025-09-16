<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanAnchor;
use Carbon\Carbon;

class SellingPlanRecurringDeliveryPolicy
{
    protected $anchors;
    protected $createdAt;
    protected $cutoff;
    protected $intent;
    protected $interval;
    protected $intervalCount;
    protected $preAnchorBehavior;

    
    /**
     * @return SellingPlanAnchor[]
     */
    public function getAnchors()
    {
        return $this->anchors;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return int
     */
    public function getCutoff()
    {
        return $this->cutoff;
    }

    
    /**
     * @return SellingPlanRecurringDeliveryPolicyIntentEnumObject
     */
    public function getIntent()
    {
        return $this->intent;
    }

    
    /**
     * @return SellingPlanIntervalEnumObject
     */
    public function getInterval()
    {
        return $this->interval;
    }

    
    /**
     * @return int
     */
    public function getIntervalCount()
    {
        return $this->intervalCount;
    }

    
    /**
     * @return SellingPlanRecurringDeliveryPolicyPreAnchorBehaviorEnumObject
     */
    public function getPreAnchorBehavior()
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
                $instance->anchors = array_map(function($item) { return SellingPlanAnchor::fromArray($item); }, $data['anchors']);
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
