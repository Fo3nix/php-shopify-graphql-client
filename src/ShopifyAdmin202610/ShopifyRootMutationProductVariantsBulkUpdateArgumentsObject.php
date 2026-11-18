<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductVariantsBulkUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["variants", "productId"];

    protected $variants;
    protected $productId;
    protected $media;
    protected $allowPartialUpdates;

    /**
     * An array of product variants to update.
     */
    public function setVariants(array $variants): static
    {
        $this->variants = $variants;

        return $this;
    }

    /**
     * The ID of the product associated with the variants to update.
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
     * When partial updates are allowed, valid variant changes may be persisted even if some of
     * the variants updated have invalid data and cannot be persisted.
     * When partial updates are not allowed, any error will prevent all variants from updating.
     */
    public function setAllowPartialUpdates($allowPartialUpdates): static
    {
        $this->allowPartialUpdates = $allowPartialUpdates;

        return $this;
    }
}
