<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the logo customizations.
 */
class ShopifyCheckoutBrandingLogoInputInputObject extends InputObject
{
    protected $image;
    protected $maxWidth;
    protected $visibility;

    /**
     * The logo image (must not be of SVG format).
     */
    public function setImage(ShopifyCheckoutBrandingImageInputInputObject $shopifyCheckoutBrandingImageInputInputObject): static
    {
        $this->image = $shopifyCheckoutBrandingImageInputInputObject;

        return $this;
    }

    /**
     * The maximum width of the logo.
     */
    public function setMaxWidth($maxWidth): static
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    /**
     * The visibility of the logo.
     */
    public function setVisibility($shopifyCheckoutBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutBrandingVisibility);

        return $this;
    }
}
