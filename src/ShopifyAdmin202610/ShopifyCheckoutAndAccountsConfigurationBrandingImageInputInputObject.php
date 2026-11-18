<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the image.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject extends InputObject
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
