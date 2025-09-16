<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanAnchor;
use Carbon\Carbon;

class SellingPlanFixedDeliveryPolicy
{
    protected $anchors;
    protected $cutoff;
    protected $fulfillmentExactTime;
    protected $fulfillmentTrigger;
    protected $intent;
    protected $preAnchorBehavior;

    
    /**
     * @return SellingPlanAnchor[]
     */
    public function getAnchors()
    {
        return $this->anchors;
    }

    
    /**
     * @return int
     */
    public function getCutoff()
    {
        return $this->cutoff;
    }

    
    /**
     * @return Carbon
     */
    public function getFulfillmentExactTime()
    {
        return $this->fulfillmentExactTime;
    }

    
    /**
     * @return SellingPlanFulfillmentTriggerEnumObject
     */
    public function getFulfillmentTrigger()
    {
        return $this->fulfillmentTrigger;
    }

    
    /**
     * @return SellingPlanFixedDeliveryPolicyIntentEnumObject
     */
    public function getIntent()
    {
        return $this->intent;
    }

    
    /**
     * @return SellingPlanFixedDeliveryPolicyPreAnchorBehaviorEnumObject
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
