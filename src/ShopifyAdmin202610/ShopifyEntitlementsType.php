<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyB2BType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketsType;

class ShopifyEntitlementsType
{
    protected $b2b;
    protected $markets;

    
    /**
     * @return ShopifyB2BType
     */
    public function getB2b()
    {
        return $this->b2b;
    }

    
    /**
     * @return ShopifyMarketsType
     */
    public function getMarkets()
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
            if (isset($data['b2b']) && $data['b2b'] !== null) {
                $instance->b2b = ShopifyB2BType::fromArray($data['b2b']);
            }
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
            if ($this->b2b !== null) {
                $data['b2b'] = $this->b2b->asArray();
            }
            if ($this->markets !== null) {
                $data['markets'] = $this->markets->asArray();
            }
            return $data;
        }
}
