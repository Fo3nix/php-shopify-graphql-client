<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantAppendMediaArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["productId", "variantMedia"];

    protected $productId;
    protected $variantMedia;

    /**
     * Specifies the product associated to the media.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * A list of pairs of variants and media to be attached to the variants.
     */
    public function setVariantMedia(array $variantMedia): static
    {
        $this->variantMedia = $variantMedia;

        return $this;
    }
}
