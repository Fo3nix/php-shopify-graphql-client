<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the sign-in logo.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogoInputInputObject extends InputObject
{
    protected $image;
    protected $maxWidth;

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
}
