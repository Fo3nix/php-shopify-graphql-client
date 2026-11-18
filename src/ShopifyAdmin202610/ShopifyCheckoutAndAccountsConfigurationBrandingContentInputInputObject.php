<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the content container.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingContentInputInputObject extends InputObject
{
    protected $divider;

    /**
     * Divider style and visibility on the content container.
     */
    public function setDivider(ShopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject): static
    {
        $this->divider = $shopifyCheckoutAndAccountsConfigurationBrandingContainerDividerInputInputObject;

        return $this;
    }
}
