<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseFulfillmentOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Order;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseDeliveryConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ReverseFulfillmentOrderThirdPartyConfirmation;

class ReverseFulfillmentOrder
{
    protected $id;
    protected $lineItems;
    protected $order;
    protected $reverseDeliveries;
    protected $status;
    protected $thirdPartyConfirmation;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ReverseFulfillmentOrderLineItemConnection
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    
    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    
    /**
     * @return ReverseDeliveryConnection
     */
    public function getReverseDeliveries()
    {
        return $this->reverseDeliveries;
    }

    
    /**
     * @return ReverseFulfillmentOrderStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return ReverseFulfillmentOrderThirdPartyConfirmation
     */
    public function getThirdPartyConfirmation()
    {
        return $this->thirdPartyConfirmation;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ReverseFulfillmentOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = Order::fromArray($data['order']);
            }
            if (isset($data['reverseDeliveries']) && $data['reverseDeliveries'] !== null) {
                $instance->reverseDeliveries = ReverseDeliveryConnection::fromArray($data['reverseDeliveries']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['thirdPartyConfirmation']) && $data['thirdPartyConfirmation'] !== null) {
                $instance->thirdPartyConfirmation = ReverseFulfillmentOrderThirdPartyConfirmation::fromArray($data['thirdPartyConfirmation']);
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->reverseDeliveries !== null) {
                $data['reverseDeliveries'] = $this->reverseDeliveries->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->thirdPartyConfirmation !== null) {
                $data['thirdPartyConfirmation'] = $this->thirdPartyConfirmation->asArray();
            }
            return $data;
        }
}
