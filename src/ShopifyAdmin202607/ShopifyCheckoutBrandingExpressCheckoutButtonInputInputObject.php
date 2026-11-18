<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to use to update the express checkout customizations.
 */
class ShopifyCheckoutBrandingExpressCheckoutButtonInputInputObject extends InputObject
{
    protected $cornerRadius;

    /**
     * The corner radius used for Express Checkout buttons.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }
}
