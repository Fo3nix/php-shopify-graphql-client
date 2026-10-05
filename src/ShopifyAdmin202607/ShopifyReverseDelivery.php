<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseDeliveryDeliverable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseDeliveryLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyReverseFulfillmentOrder;

class ShopifyReverseDelivery
{
    protected $deliverable;
    protected $id;
    protected $reverseDeliveryLineItems;
    protected $reverseFulfillmentOrder;

    
    /**
     * @return ShopifyReverseDeliveryDeliverable
     */
    public function getDeliverable()
    {
        return $this->deliverable;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyReverseDeliveryLineItemConnection
     */
    public function getReverseDeliveryLineItems()
    {
        return $this->reverseDeliveryLineItems;
    }

    
    /**
     * @return ShopifyReverseFulfillmentOrder
     */
    public function getReverseFulfillmentOrder()
    {
        return $this->reverseFulfillmentOrder;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deliverable']) && $data['deliverable'] !== null) {
                $instance->deliverable = ShopifyReverseDeliveryDeliverable::fromArray($data['deliverable']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['reverseDeliveryLineItems']) && $data['reverseDeliveryLineItems'] !== null) {
                $instance->reverseDeliveryLineItems = ShopifyReverseDeliveryLineItemConnection::fromArray($data['reverseDeliveryLineItems']);
            }
            if (isset($data['reverseFulfillmentOrder']) && $data['reverseFulfillmentOrder'] !== null) {
                $instance->reverseFulfillmentOrder = ShopifyReverseFulfillmentOrder::fromArray($data['reverseFulfillmentOrder']);
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
            if ($this->deliverable !== null) {
                $data['deliverable'] = $this->deliverable->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->reverseDeliveryLineItems !== null) {
                $data['reverseDeliveryLineItems'] = $this->reverseDeliveryLineItems->asArray();
            }
            if ($this->reverseFulfillmentOrder !== null) {
                $data['reverseFulfillmentOrder'] = $this->reverseFulfillmentOrder->asArray();
            }
            return $data;
        }
}
