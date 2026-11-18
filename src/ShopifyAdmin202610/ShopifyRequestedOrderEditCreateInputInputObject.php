<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a requested order edit.
 */
class ShopifyRequestedOrderEditCreateInputInputObject extends InputObject
{
    const REQUIRED = ["orderId", "lineItems"];

    protected $orderId;
    protected $lineItems;

    /**
     * The ID of the order to create a requested order edit for.
     */
    public function setOrderId($orderId): static
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * The line item changes to include in the requested order edit, grouped by the type of change.
     */
    public function setLineItems(ShopifyRequestedOrderEditLineItemsInputInputObject $shopifyRequestedOrderEditLineItemsInputInputObject): static
    {
        $this->lineItems = $shopifyRequestedOrderEditLineItemsInputInputObject;

        return $this;
    }
}
