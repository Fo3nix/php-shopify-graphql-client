<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update the typography. Refer to the [typography tutorial](https://shopify.dev/docs/apps/checkout/styling/customize-typography)
 * for more information on how to set these fields.
 */
class ShopifyCheckoutBrandingTypographyInputInputObject extends InputObject
{
    protected $size;
    protected $primary;
    protected $secondary;

    /**
     * The font size.
     */
    public function setSize(ShopifyCheckoutBrandingFontSizeInputInputObject $shopifyCheckoutBrandingFontSizeInputInputObject): static
    {
        $this->size = $shopifyCheckoutBrandingFontSizeInputInputObject;

        return $this;
    }

    /**
     * A font group used for most components such as text, buttons and form controls.
     */
    public function setPrimary(ShopifyCheckoutBrandingFontGroupInputInputObject $shopifyCheckoutBrandingFontGroupInputInputObject): static
    {
        $this->primary = $shopifyCheckoutBrandingFontGroupInputInputObject;

        return $this;
    }

    /**
     * A font group used for heading components by default.
     */
    public function setSecondary(ShopifyCheckoutBrandingFontGroupInputInputObject $shopifyCheckoutBrandingFontGroupInputInputObject): static
    {
        $this->secondary = $shopifyCheckoutBrandingFontGroupInputInputObject;

        return $this;
    }
}
