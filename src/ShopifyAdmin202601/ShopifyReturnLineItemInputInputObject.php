<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a return line item.
 */
class ShopifyReturnLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["quantity", "fulfillmentLineItemId"];

    protected $quantity;
    protected $returnReasonDefinitionId;
    protected $returnReasonNote;
    protected $fulfillmentLineItemId;
    protected $restockingFee;

    /**
     * The quantity of the item to be returned.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

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
     * A note about the reason that the item is being returned.
     * Maximum length: 255 characters.
     */
    public function setReturnReasonNote($returnReasonNote): static
    {
        $this->returnReasonNote = $returnReasonNote;

        return $this;
    }

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
     * The restocking fee to capture.
     */
    public function setRestockingFee(ShopifyRestockingFeeInputInputObject $shopifyRestockingFeeInputInputObject): static
    {
        $this->restockingFee = $shopifyRestockingFeeInputInputObject;

        return $this;
    }
}
