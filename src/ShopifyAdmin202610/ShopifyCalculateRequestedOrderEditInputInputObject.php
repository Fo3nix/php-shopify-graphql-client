<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

class ShopifyCalculateRequestedOrderEditInputInputObject extends InputObject
{
    protected $orderId;
    protected $lineItems;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function setLineItems(ShopifyCalculateRequestedOrderEditLineItemsInputInputObject $shopifyCalculateRequestedOrderEditLineItemsInputInputObject)
    {
        $this->lineItems = $shopifyCalculateRequestedOrderEditLineItemsInputInputObject;

        return $this;
    }
}
