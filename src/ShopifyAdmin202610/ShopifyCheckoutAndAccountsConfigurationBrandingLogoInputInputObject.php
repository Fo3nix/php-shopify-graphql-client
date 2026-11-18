<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the logo.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingLogoInputInputObject extends InputObject
{
    protected $image;
    protected $maxWidth;
    protected $visibility;

    /**
     * The logo image.
     */
    public function setImage(ShopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject): static
    {
        $this->image = $shopifyCheckoutAndAccountsConfigurationBrandingImageInputInputObject;

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
    public function setVisibility($shopifyCheckoutAndAccountsConfigurationBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingVisibility);

        return $this;
    }
}
