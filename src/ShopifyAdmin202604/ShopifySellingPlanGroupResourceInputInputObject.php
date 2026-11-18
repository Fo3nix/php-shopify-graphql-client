<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for resource association with a Selling Plan Group.
 */
class ShopifySellingPlanGroupResourceInputInputObject extends InputObject
{
    protected $productVariantIds;
    protected $productIds;

    /**
     * The IDs of the Variants to add to the Selling Plan Group.
     */
    public function setProductVariantIds(array $productVariantIds): static
    {
        $this->productVariantIds = $productVariantIds;

        return $this;
    }

    /**
     * The IDs of the Products to add to the Selling Plan Group.
     */
    public function setProductIds(array $productIds): static
    {
        $this->productIds = $productIds;

        return $this;
    }
}
