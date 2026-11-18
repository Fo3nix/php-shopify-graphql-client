<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the sign-in header.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderInputInputObject extends InputObject
{
    protected $logo;
    protected $padding;

    /**
     * The store logo.
     */
    public function setLogo(ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogoInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSignInLogoInputInputObject): static
    {
        $this->logo = $shopifyCheckoutAndAccountsConfigurationBrandingSignInLogoInputInputObject;

        return $this;
    }

    /**
     * The padding of the header container.
     */
    public function setPadding($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->padding = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }
}
