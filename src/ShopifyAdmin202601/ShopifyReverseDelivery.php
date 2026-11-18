<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReverseDeliveryDeliverableHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReverseDeliveryLineItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyReverseFulfillmentOrder;

/**
 * A reverse delivery is a post-fulfillment object that represents a buyer sending a package to a merchant.
 * For example, a buyer requests a return, and a merchant sends the buyer a shipping label.
 * The reverse delivery contains the context of the items sent back, how they're being sent back
 * (for example, a shipping label), and the current state of the delivery (tracking information).
 */
class ShopifyReverseDelivery implements ShopifyNode
{
    protected $deliverable;
    protected $id;
    protected $reverseDeliveryLineItems;
    protected $reverseFulfillmentOrder;

    
    /**
     * The deliverable associated with the reverse delivery.
     *
     * @return ShopifyReverseDeliveryShippingDeliverable
     */
    public function getDeliverable(): ?ShopifyReverseDeliveryShippingDeliverable
    {
        return $this->deliverable;
    }

    
    /**
     * The ID of the reverse delivery.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The reverse delivery line items attached to the reverse delivery.
     *
     * @return ShopifyReverseDeliveryLineItemConnection
     */
    public function getReverseDeliveryLineItems(): ?ShopifyReverseDeliveryLineItemConnection
    {
        return $this->reverseDeliveryLineItems;
    }

    
    /**
     * The `ReverseFulfillmentOrder` associated with the reverse delivery.
     *
     * @return ShopifyReverseFulfillmentOrder
     */
    public function getReverseFulfillmentOrder(): ?ShopifyReverseFulfillmentOrder
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
                $instance->deliverable = ShopifyReverseDeliveryDeliverableHydrator::fromArray($data['deliverable']);
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
                $data['deliverable'] = ShopifyReverseDeliveryDeliverableHydrator::toArray($this->deliverable);
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
