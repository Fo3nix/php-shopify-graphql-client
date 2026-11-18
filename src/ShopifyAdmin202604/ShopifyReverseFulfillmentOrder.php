<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseFulfillmentOrderLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseDeliveryConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyReverseFulfillmentOrderThirdPartyConfirmation;

/**
 * A group of one or more items in a return that will be processed at a fulfillment service.
 * There can be more than one reverse fulfillment order for a return at a given location.
 */
class ShopifyReverseFulfillmentOrder implements ShopifyNode
{
    protected $id;
    protected $lineItems;
    protected $order;
    protected $reverseDeliveries;
    protected $status;
    protected $thirdPartyConfirmation;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The list of reverse fulfillment order line items for the reverse fulfillment order.
     *
     * @return ShopifyReverseFulfillmentOrderLineItemConnection
     */
    public function getLineItems(): ?ShopifyReverseFulfillmentOrderLineItemConnection
    {
        return $this->lineItems;
    }

    
    /**
     * The order associated with the reverse fulfillment order.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The list of reverse deliveries for the reverse fulfillment order.
     *
     * @return ShopifyReverseDeliveryConnection
     */
    public function getReverseDeliveries(): ?ShopifyReverseDeliveryConnection
    {
        return $this->reverseDeliveries;
    }

    
    /**
     * The status of the reverse fulfillment order.
     *
     * @return string A ShopifyReverseFulfillmentOrderStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The current confirmation for the reverse fulfillment order from a third-party logistics service.
     * If no third-party service is involved, then this value is `nil`.
     *
     * @return ShopifyReverseFulfillmentOrderThirdPartyConfirmation
     */
    public function getThirdPartyConfirmation(): ?ShopifyReverseFulfillmentOrderThirdPartyConfirmation
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
                $instance->lineItems = ShopifyReverseFulfillmentOrderLineItemConnection::fromArray($data['lineItems']);
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
            }
            if (isset($data['reverseDeliveries']) && $data['reverseDeliveries'] !== null) {
                $instance->reverseDeliveries = ShopifyReverseDeliveryConnection::fromArray($data['reverseDeliveries']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['thirdPartyConfirmation']) && $data['thirdPartyConfirmation'] !== null) {
                $instance->thirdPartyConfirmation = ShopifyReverseFulfillmentOrderThirdPartyConfirmation::fromArray($data['thirdPartyConfirmation']);
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
