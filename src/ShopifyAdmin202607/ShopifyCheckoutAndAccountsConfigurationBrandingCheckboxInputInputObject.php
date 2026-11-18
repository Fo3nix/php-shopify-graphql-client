<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the checkboxes.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckboxInputInputObject extends InputObject
{
    protected $cornerRadius;

    /**
     * The corner radius.
     */
    public function setCornerRadius($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingCornerRadius);

        return $this;
    }
}
