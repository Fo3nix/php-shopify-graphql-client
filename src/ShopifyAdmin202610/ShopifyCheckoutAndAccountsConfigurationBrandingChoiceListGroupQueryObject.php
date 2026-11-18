<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customizations that apply to the 'group' variant of ChoiceList.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingChoiceListGroup";

    /**
     * The spacing between UI elements in the list.
     */
    public function selectSpacing(): static
    {
        $this->selectField("spacing");

        return $this;
    }
}
