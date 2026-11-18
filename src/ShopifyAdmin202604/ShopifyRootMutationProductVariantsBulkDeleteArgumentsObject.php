<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantsBulkDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["variantsIds", "productId"];

    protected $variantsIds;
    protected $productId;

    /**
     * An array of product variants IDs to delete.
     */
    public function setVariantsIds(array $variantsIds): static
    {
        $this->variantsIds = $variantsIds;

        return $this;
    }

    /**
     * The ID of the product with the variants to update.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }
}
