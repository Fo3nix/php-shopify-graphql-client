<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the cart link at Checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkInputInputObject extends InputObject
{
    protected $visibility;

    /**
     * The input to update the visibility of cart links in checkout. This hides the cart icon on one-page and the cart link in the breadcrumbs/buyer journey on three-page checkout.
     */
    public function setVisibility($shopifyCheckoutAndAccountsConfigurationBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingVisibility);

        return $this;
    }
}
