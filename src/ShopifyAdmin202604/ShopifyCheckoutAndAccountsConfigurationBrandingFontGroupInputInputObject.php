<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update a font group.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupInputInputObject extends InputObject
{
    protected $shopifyFontGroup;
    protected $customFontGroup;

    /**
     * A Shopify font group.
     */
    public function setShopifyFontGroup(ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupInputInputObject): static
    {
        $this->shopifyFontGroup = $shopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupInputInputObject;

        return $this;
    }

    /**
     * A custom font group.
     */
    public function setCustomFontGroup(ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupInputInputObject): static
    {
        $this->customFontGroup = $shopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupInputInputObject;

        return $this;
    }
}
