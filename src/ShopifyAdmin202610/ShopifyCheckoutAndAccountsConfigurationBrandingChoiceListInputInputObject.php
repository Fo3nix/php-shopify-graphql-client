<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the choice list.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListInputInputObject extends InputObject
{
    protected $group;

    /**
     * The 'group' variant of ChoiceList.
     */
    public function setGroup(ShopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupInputInputObject): static
    {
        $this->group = $shopifyCheckoutAndAccountsConfigurationBrandingChoiceListGroupInputInputObject;

        return $this;
    }
}
