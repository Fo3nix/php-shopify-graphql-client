<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating the cart link customizations at checkout.
 */
class ShopifyCheckoutBrandingCartLinkInputInputObject extends InputObject
{
    protected $visibility;

    /**
     * The input to update the visibility of cart links in checkout. This hides the cart icon on one-page and the cart link in the breadcrumbs/buyer journey on three-page checkout.
     */
    public function setVisibility($shopifyCheckoutBrandingVisibility): static
    {
        $this->visibility = new RawObject($shopifyCheckoutBrandingVisibility);

        return $this;
    }
}
