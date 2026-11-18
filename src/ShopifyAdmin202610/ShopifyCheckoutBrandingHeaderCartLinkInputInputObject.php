<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for header cart link customizations.
 */
class ShopifyCheckoutBrandingHeaderCartLinkInputInputObject extends InputObject
{
    protected $contentType;
    protected $image;

    /**
     * The input for the content type for the header back to cart link in 1-page checkout. Setting this to image will render the custom image provided using the image field on the header cart_link object. If no image is provided, the default cart icon will be used.
     */
    public function setContentType($shopifyCheckoutBrandingCartLinkContentType): static
    {
        $this->contentType = new RawObject($shopifyCheckoutBrandingCartLinkContentType);

        return $this;
    }

    /**
     * The input for the image that's used for the header back to cart link in 1-page checkout when the content type is set to image.
     */
    public function setImage(ShopifyCheckoutBrandingImageInputInputObject $shopifyCheckoutBrandingImageInputInputObject): static
    {
        $this->image = $shopifyCheckoutBrandingImageInputInputObject;

        return $this;
    }
}
