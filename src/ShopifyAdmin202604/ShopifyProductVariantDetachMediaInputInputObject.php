<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to detach media from a single variant.
 */
class ShopifyProductVariantDetachMediaInputInputObject extends InputObject
{
    const REQUIRED = ["variantId", "mediaIds"];

    protected $variantId;
    protected $mediaIds;

    /**
     * Specifies the variant from which media will be detached.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * Specifies the media to detach from the variant.
     */
    public function setMediaIds(array $mediaIds): static
    {
        $this->mediaIds = $mediaIds;

        return $this;
    }
}
