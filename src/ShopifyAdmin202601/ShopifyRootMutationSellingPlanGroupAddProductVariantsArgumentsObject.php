<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationSellingPlanGroupAddProductVariantsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "productVariantIds"];

    protected $id;
    protected $productVariantIds;

    /**
     * The ID of the selling plan group.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The IDs of the product variants to add.
     */
    public function setProductVariantIds(array $productVariantIds): static
    {
        $this->productVariantIds = $productVariantIds;

        return $this;
    }
}
