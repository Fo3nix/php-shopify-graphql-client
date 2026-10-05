<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrder;

class ShopifySubscriptionBillingAttemptSuccessState
{
    protected $order;

    
    /**
     * @return ShopifyOrder
     */
    public function getOrder()
    {
        return $this->order;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
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
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            return $data;
        }
}
