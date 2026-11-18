<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return line item.
 */
class ShopifyReturnRequestLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["fulfillmentLineItemId", "quantity"];

    protected $fulfillmentLineItemId;
    protected $quantity;
    protected $restockingFee;
    protected $returnReasonDefinitionId;
    protected $customerNote;

    /**
     * The ID of the fulfillment line item to be returned.
     * Specifically, this field expects a `FulfillmentLineItem.id`.
     */
    public function setFulfillmentLineItemId($fulfillmentLineItemId): static
    {
        $this->fulfillmentLineItemId = $fulfillmentLineItemId;

        return $this;
    }

    /**
     * The quantity of the item that's being returned.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The restocking fee to capture.
     */
    public function setRestockingFee(ShopifyRestockingFeeInputInputObject $shopifyRestockingFeeInputInputObject): static
    {
        $this->restockingFee = $shopifyRestockingFeeInputInputObject;

        return $this;
    }

    /**
     * The ID of a [`ReturnReasonDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ReturnReasonDefinition). Accepts any ID from the full library of reasons available via [`returnReasonDefinitions`](https://shopify.dev/docs/api/admin-graphql/latest/queries/returnReasonDefinitions), not limited to the suggested reasons for the line item.
     */
    public function setReturnReasonDefinitionId($returnReasonDefinitionId): static
    {
        $this->returnReasonDefinitionId = $returnReasonDefinitionId;

        return $this;
    }

    /**
     * A note from the customer that describes the item to be returned.
     * For example, the note can communicate issues with the item to the merchant.
     * Maximum length: 300 characters.
     */
    public function setCustomerNote($customerNote): static
    {
        $this->customerNote = $customerNote;

        return $this;
    }
}
