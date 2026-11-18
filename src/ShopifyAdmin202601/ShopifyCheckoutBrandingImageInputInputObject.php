<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a checkout branding image uploaded via the Files API.
 */
class ShopifyCheckoutBrandingImageInputInputObject extends InputObject
{
    protected $mediaImageId;

    /**
     * A globally-unique ID.
     */
    public function setMediaImageId($mediaImageId): static
    {
        $this->mediaImageId = $mediaImageId;

        return $this;
    }
}
