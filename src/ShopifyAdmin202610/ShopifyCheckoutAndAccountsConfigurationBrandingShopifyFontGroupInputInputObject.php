<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for customizing a Shopify font group.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupInputInputObject extends InputObject
{
    const REQUIRED = ["baseFontHandle", "boldFontHandle"];

    protected $baseFontHandle;
    protected $boldFontHandle;
    protected $loadingStrategy;

    /**
     * The Shopify base font handle.
     */
    public function setBaseFontHandle($baseFontHandle): static
    {
        $this->baseFontHandle = $baseFontHandle;

        return $this;
    }

    /**
     * The Shopify bold font handle.
     */
    public function setBoldFontHandle($boldFontHandle): static
    {
        $this->boldFontHandle = $boldFontHandle;

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
