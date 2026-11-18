<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationShippingLabelPurchaseArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["shippingLabelPurchase"];

    protected $shippingLabelPurchase;

    /**
     * The shipment, package, and rate preferences for the label purchase.
     */
    public function setShippingLabelPurchase(ShopifyShippingLabelPurchaseInputInputObject $shopifyShippingLabelPurchaseInputInputObject): static
    {
        $this->shippingLabelPurchase = $shopifyShippingLabelPurchaseInputInputObject;

        return $this;
    }
}
