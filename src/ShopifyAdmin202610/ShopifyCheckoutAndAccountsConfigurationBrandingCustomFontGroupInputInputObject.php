<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing a custom font group.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupInputInputObject extends InputObject
{
    const REQUIRED = ["base", "bold"];

    protected $base;
    protected $bold;
    protected $loadingStrategy;

    /**
     * The base font.
     */
    public function setBase(ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject): static
    {
        $this->base = $shopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject;

        return $this;
    }

    /**
     * The bold font.
     */
    public function setBold(ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject): static
    {
        $this->bold = $shopifyCheckoutAndAccountsConfigurationBrandingCustomFontInputInputObject;

        return $this;
    }

    /**
     * The font loading strategy.
     */
    public function setLoadingStrategy($shopifyCheckoutAndAccountsConfigurationBrandingFontLoadingStrategy): static
    {
        $this->loadingStrategy = new RawObject($shopifyCheckoutAndAccountsConfigurationBrandingFontLoadingStrategy);

        return $this;
    }
}
