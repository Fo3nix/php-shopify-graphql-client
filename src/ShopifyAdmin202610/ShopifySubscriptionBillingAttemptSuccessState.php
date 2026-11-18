<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOrder;

/**
 * The billing attempt completed successfully and created an order.
 */
class ShopifySubscriptionBillingAttemptSuccessState
{
    protected $order;

    
    /**
     * The order created by the successful billing attempt. May be null if the order was deleted.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
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
