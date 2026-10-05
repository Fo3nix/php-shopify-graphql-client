<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCalculatedRequestedOrderEditLineItemConnection;

class ShopifyCalculatedRequestedOrderEditLineItems
{
    protected $removals;

    
    /**
     * @return ShopifyCalculatedRequestedOrderEditLineItemConnection
     */
    public function getRemovals()
    {
        return $this->removals;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['removals']) && $data['removals'] !== null) {
                $instance->removals = ShopifyCalculatedRequestedOrderEditLineItemConnection::fromArray($data['removals']);
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
            if ($this->removals !== null) {
                $data['removals'] = $this->removals->asArray();
            }
            return $data;
        }
}
