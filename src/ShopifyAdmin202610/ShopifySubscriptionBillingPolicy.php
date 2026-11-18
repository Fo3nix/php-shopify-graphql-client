<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanAnchor;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationCadence;

/**
 * Represents a Subscription Billing Policy.
 */
class ShopifySubscriptionBillingPolicy
{
    protected $anchors;
    protected $cadence;
    protected $interval;
    protected $intervalCount;
    protected $maxCycles;
    protected $minCycles;

    
    /**
     * Specific anchor dates upon which the billing interval calculations should be made.
     *
     * @return ShopifySellingPlanAnchor[]
     */
    public function getAnchors(): ?array
    {
        return $this->anchors;
    }

    
    /**
     * The billing cadence associated with the subscription contract.
     *
     * @return ShopifySubscriptionContractCalculationCadence
     */
    public function getCadence(): ?ShopifySubscriptionContractCalculationCadence
    {
        return $this->cadence;
    }

    
    /**
     * The kind of interval that's associated with this schedule (e.g. Monthly, Weekly, etc).
     *
     * @return string A ShopifySellingPlanIntervalEnumObject value
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    
    /**
     * The number of billing intervals between invoices.
     *
     * @return int
     */
    public function getIntervalCount(): ?int
    {
        return $this->intervalCount;
    }

    
    /**
     * Maximum amount of cycles after which the subscription ends.
     *
     * @return int
     */
    public function getMaxCycles(): ?int
    {
        return $this->maxCycles;
    }

    
    /**
     * Minimum amount of cycles required in the subscription.
     *
     * @return int
     */
    public function getMinCycles(): ?int
    {
        return $this->minCycles;
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
            if (isset($data['cadence']) && $data['cadence'] !== null) {
                $instance->cadence = ShopifySubscriptionContractCalculationCadence::fromArray($data['cadence']);
            }
            if (isset($data['interval']) && $data['interval'] !== null) {
                $instance->interval = $data['interval'];
            }
            if (isset($data['intervalCount']) && $data['intervalCount'] !== null) {
                $instance->intervalCount = $data['intervalCount'];
            }
            if (isset($data['maxCycles']) && $data['maxCycles'] !== null) {
                $instance->maxCycles = $data['maxCycles'];
            }
            if (isset($data['minCycles']) && $data['minCycles'] !== null) {
                $instance->minCycles = $data['minCycles'];
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
            if ($this->cadence !== null) {
                $data['cadence'] = $this->cadence->asArray();
            }
            if ($this->interval !== null) {
                $data['interval'] = $this->interval;
            }
            if ($this->intervalCount !== null) {
                $data['intervalCount'] = $this->intervalCount;
            }
            if ($this->maxCycles !== null) {
                $data['maxCycles'] = $this->maxCycles;
            }
            if ($this->minCycles !== null) {
                $data['minCycles'] = $this->minCycles;
            }
            return $data;
        }
}
