<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to use to update the Express Checkout customizations.
 */
class ShopifyCheckoutBrandingExpressCheckoutInputInputObject extends InputObject
{
    protected $button;

    /**
     * The Express Checkout buttons customizations.
     */
    public function setButton(ShopifyCheckoutBrandingExpressCheckoutButtonInputInputObject $shopifyCheckoutBrandingExpressCheckoutButtonInputInputObject): static
    {
        $this->button = $shopifyCheckoutBrandingExpressCheckoutButtonInputInputObject;

        return $this;
    }
}
