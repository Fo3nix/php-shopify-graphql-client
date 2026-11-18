<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifySellingPlanGroupProductVariantsCountArgumentsObject extends ArgumentsObject
{
    protected $productId;

    /**
     * The ID of the product to scope the count to.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }
}
