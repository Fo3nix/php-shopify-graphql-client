<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantDetachMediaArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "variantMedia"];

    protected $productId;
    protected $variantMedia;

    /**
     * Specifies the product to which the variants and media are associated.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * A list of pairs of variants and media to be deleted from the variants.
     */
    public function setVariantMedia(array $variantMedia): static
    {
        $this->variantMedia = $variantMedia;

        return $this;
    }
}
