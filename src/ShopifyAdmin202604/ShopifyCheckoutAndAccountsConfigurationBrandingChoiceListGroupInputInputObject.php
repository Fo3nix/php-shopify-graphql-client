<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing the 'group' variant of ChoiceList.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupInputInputObject extends InputObject
{
    protected $spacing;

    /**
     * The spacing between UI elements in the list.
     */
    public function setSpacing($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword): static
    {
        $this->spacing = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingSpacingKeyword);

        return $this;
    }
}
