<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnableFulfillmentLineItemConnection;

/**
 * A delivered order that's eligible to be returned to the merchant. Provides the items from completed fulfillments that customers can select when initiating a return.
 *
 * Use returnable fulfillments to determine which items are eligible for return before creating a [`Return`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Return) with the [`returnCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnCreate) mutation. The line items show quantities that are available for return.
 *
 * Learn more about [building return management workflows](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management).
 */
class ShopifyReturnableFulfillment implements ShopifyNode
{
    protected $fulfillment;
    protected $id;
    protected $returnableFulfillmentLineItems;

    
    /**
     * The fulfillment that the returnable fulfillment refers to.
     *
     * @return ShopifyFulfillment
     */
    public function getFulfillment(): ?ShopifyFulfillment
    {
        return $this->fulfillment;
    }

    
    /**
     * The unique ID of the Returnable Fulfillment.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The list of returnable fulfillment line items.
     *
     * @return ShopifyReturnableFulfillmentLineItemConnection
     */
    public function getReturnableFulfillmentLineItems(): ?ShopifyReturnableFulfillmentLineItemConnection
    {
        return $this->returnableFulfillmentLineItems;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fulfillment']) && $data['fulfillment'] !== null) {
                $instance->fulfillment = ShopifyFulfillment::fromArray($data['fulfillment']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['returnableFulfillmentLineItems']) && $data['returnableFulfillmentLineItems'] !== null) {
                $instance->returnableFulfillmentLineItems = ShopifyReturnableFulfillmentLineItemConnection::fromArray($data['returnableFulfillmentLineItems']);
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
            if ($this->fulfillment !== null) {
                $data['fulfillment'] = $this->fulfillment->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->returnableFulfillmentLineItems !== null) {
                $data['returnableFulfillmentLineItems'] = $this->returnableFulfillmentLineItems->asArray();
            }
            return $data;
        }
}
