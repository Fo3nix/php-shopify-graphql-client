<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to append media to a single variant.
 */
class ShopifyProductVariantAppendMediaInputInputObject extends InputObject
{
    const REQUIRED = ["variantId", "mediaIds"];

    protected $variantId;
    protected $mediaIds;

    /**
     * Specifies the variant to which media will be appended.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * Specifies the media to append to the variant.
     */
    public function setMediaIds(array $mediaIds): static
    {
        $this->mediaIds = $mediaIds;

        return $this;
    }
}
