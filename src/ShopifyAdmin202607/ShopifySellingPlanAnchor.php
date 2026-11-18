<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Specifies the date when delivery or fulfillment is completed by a merchant for a given time cycle. You can also
 * define a cutoff for which customers are eligible to enter this cycle and the desired behavior for customers who
 * start their subscription inside the cutoff period.
 *
 * Some example scenarios where anchors can be useful to implement advanced delivery behavior:
 * - A merchant starts fulfillment on a specific date every month.
 * - A merchant wants to bill the 1st of every quarter.
 * - A customer expects their delivery every Tuesday.
 *
 * For more details, see [About Selling Plans](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans#anchors).
 */
class ShopifySellingPlanAnchor
{
    protected $cutoffDay;
    protected $day;
    protected $month;
    protected $type;

    
    /**
     * The cutoff day for the anchor. Specifies a buffer period before the anchor date for orders to be included in a
     * delivery or fulfillment cycle.
     *
     * If `type` is WEEKDAY, then the value must be between 1-7. Shopify interprets
     * the days of the week according to ISO 8601, where 1 is Monday.
     *
     * If `type` is MONTHDAY, then the value must be between 1-31.
     *
     * If `type` is YEARDAY, then the value must be `null`.
     *
     * @return int
     */
    public function getCutoffDay(): ?int
    {
        return $this->cutoffDay;
    }

    
    /**
     * The day of the anchor.
     *
     * If `type` is WEEKDAY, then the value must be between 1-7. Shopify interprets
     * the days of the week according to ISO 8601, where 1 is Monday.
     *
     * If `type` isn't WEEKDAY, then the value must be between 1-31.
     *
     * @return int
     */
    public function getDay(): ?int
    {
        return $this->day;
    }

    
    /**
     * The month of the anchor. If type is different than YEARDAY, then the value must
     * be `null` or between 1-12.
     *
     * @return int
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }

    
    /**
     * Represents the anchor type, it can be one of WEEKDAY, MONTHDAY, YEARDAY.
     *
     * @return string A ShopifySellingPlanAnchorTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cutoffDay']) && $data['cutoffDay'] !== null) {
                $instance->cutoffDay = $data['cutoffDay'];
            }
            if (isset($data['day']) && $data['day'] !== null) {
                $instance->day = $data['day'];
            }
            if (isset($data['month']) && $data['month'] !== null) {
                $instance->month = $data['month'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->cutoffDay !== null) {
                $data['cutoffDay'] = $this->cutoffDay;
            }
            if ($this->day !== null) {
                $data['day'] = $this->day;
            }
            if ($this->month !== null) {
                $data['month'] = $this->month;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
