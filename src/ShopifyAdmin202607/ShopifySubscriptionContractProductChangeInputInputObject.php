<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create a Subscription Contract.
 */
class ShopifySubscriptionContractProductChangeInputInputObject extends InputObject
{
    protected $productVariantId;
    protected $currentPrice;

    /**
     * The ID of the product variant the subscription line refers to.
     */
    public function setProductVariantId($productVariantId): static
    {
        $this->productVariantId = $productVariantId;

        return $this;
    }

    /**
     * The price of the product.
     */
    public function setCurrentPrice($currentPrice): static
    {
        $this->currentPrice = $currentPrice;

        return $this;
    }
}
