<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the checkboxes customizations.
 */
class ShopifyCheckoutBrandingCheckboxInputInputObject extends InputObject
{
    protected $cornerRadius;

    /**
     * The corner radius used for checkboxes.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }
}
