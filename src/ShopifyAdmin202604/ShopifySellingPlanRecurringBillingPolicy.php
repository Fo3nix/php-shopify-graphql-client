<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySellingPlanAnchor;
use Carbon\Carbon;

/**
 * Represents a recurring selling plan billing policy.
 */
class ShopifySellingPlanRecurringBillingPolicy
{
    protected $anchors;
    protected $createdAt;
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
     * The date and time when the selling plan billing policy was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The billing frequency, it can be either: day, week, month or year.
     *
     * @return string A ShopifySellingPlanIntervalEnumObject value
     */
    public function getInterval(): ?string
    {
        return $this->interval;
    }

    
    /**
     * The number of intervals between billings.
     *
     * @return int
     */
    public function getIntervalCount(): ?int
    {
        return $this->intervalCount;
    }

    
    /**
     * Maximum number of billing iterations.
     *
     * @return int
     */
    public function getMaxCycles(): ?int
    {
        return $this->maxCycles;
    }

    
    /**
     * Minimum number of billing iterations.
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
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
