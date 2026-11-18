<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketConnection;

/**
 * Markets where the discount is available.
 */
class ShopifyDiscountMarkets
{
    protected $markets;
    protected $marketsCount;

    
    /**
     * The list of markets where the discount is available.
     *
     * @return ShopifyMarketConnection
     */
    public function getMarkets(): ?ShopifyMarketConnection
    {
        return $this->markets;
    }

    
    /**
     * The number of markets where the discount is available.
     *
     * @return int
     */
    public function getMarketsCount(): ?int
    {
        return $this->marketsCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = ShopifyMarketConnection::fromArray($data['markets']);
            }
            if (isset($data['marketsCount']) && $data['marketsCount'] !== null) {
                $instance->marketsCount = $data['marketsCount'];
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
            if ($this->markets !== null) {
                $data['markets'] = $this->markets->asArray();
            }
            if ($this->marketsCount !== null) {
                $data['marketsCount'] = $this->marketsCount;
            }
            return $data;
        }
}
