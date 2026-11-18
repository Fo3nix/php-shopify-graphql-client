<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationProductVariantsBulkCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["variants", "productId"];

    protected $variants;
    protected $productId;
    protected $media;
    protected $strategy;

    /**
     * An array of product variants to be created.
     */
    public function setVariants(array $variants): static
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * The ID of the product on which to create the variants.
     */
    public function setProductId($productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * List of new media to be added to the product.
     */
    public function setMedia(array $media): static
    {
        $this->media = $media;

        return $this;
    }

    /**
     * The strategy defines which behavior the mutation should observe, such as whether to keep or delete the standalone variant (when product has only a single or default variant) when creating new variants in bulk.
     */
    public function setStrategy($shopifyProductVariantsBulkCreateStrategy): static
    {
        $this->strategy = new RawObject($shopifyProductVariantsBulkCreateStrategy);

        return $this;
    }
}
