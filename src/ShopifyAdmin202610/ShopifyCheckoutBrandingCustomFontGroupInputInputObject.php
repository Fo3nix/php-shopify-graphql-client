<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to update a custom font group.
 */
class ShopifyCheckoutBrandingCustomFontGroupInputInputObject extends InputObject
{
    const REQUIRED = ["base", "bold"];

    protected $base;
    protected $bold;
    protected $loadingStrategy;

    /**
     * The base font.
     */
    public function setBase(ShopifyCheckoutBrandingCustomFontInputInputObject $shopifyCheckoutBrandingCustomFontInputInputObject): static
    {
        $this->base = $shopifyCheckoutBrandingCustomFontInputInputObject;

        return $this;
    }

    /**
     * The bold font.
     */
    public function setBold(ShopifyCheckoutBrandingCustomFontInputInputObject $shopifyCheckoutBrandingCustomFontInputInputObject): static
    {
        $this->bold = $shopifyCheckoutBrandingCustomFontInputInputObject;

        return $this;
    }

    /**
     * The font loading strategy.
     */
    public function setLoadingStrategy($shopifyCheckoutBrandingFontLoadingStrategy): static
    {
        $this->loadingStrategy = new RawObject($shopifyCheckoutBrandingFontLoadingStrategy);

        return $this;
    }
}
