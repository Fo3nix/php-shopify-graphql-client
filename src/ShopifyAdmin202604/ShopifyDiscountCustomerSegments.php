<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifySegment;

/**
 * Represents customer segments that are eligible to receive a specific discount, allowing merchants to target promotions to defined groups of customers. This enables personalized marketing campaigns based on customer behavior and characteristics.
 *
 * For example, a "VIP Customer 15% Off" promotion might target a segment of high-value repeat customers, while a "New Customer Welcome" discount could focus on first-time buyers.
 *
 * Segment-based discounts help merchants create more relevant promotional experiences and improve conversion rates by showing the right offers to the right customers at the right time.
 */
class ShopifyDiscountCustomerSegments
{
    protected $segments;

    
    /**
     * The list of customer segments who are eligible for the discount.
     *
     * @return ShopifySegment[]
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['segments']) && $data['segments'] !== null) {
                $instance->segments = array_map(function($item) { return ShopifySegment::fromArray($item); }, $data['segments']);
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
            if ($this->segments !== null) {
                $data['segments'] = array_map(function($item) { return $item->asArray(); }, $this->segments);
            }
            return $data;
        }
}
