<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketsType;

/**
 * The shop's entitlements.
 */
class ShopifyEntitlementsType
{
    protected $markets;

    
    /**
     * Represents the markets for the shop.
     *
     * @return ShopifyMarketsType
     */
    public function getMarkets(): ?ShopifyMarketsType
    {
        return $this->markets;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = ShopifyMarketsType::fromArray($data['markets']);
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
            return $data;
        }
}
