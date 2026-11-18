<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to update the color settings for global colors and color schemes.
 */
class ShopifyCheckoutBrandingColorsInputInputObject extends InputObject
{
    protected $global;
    protected $schemes;

    /**
     * The input to update global colors for customizing the overall look and feel of the user interface.
     */
    public function setGlobal(ShopifyCheckoutBrandingColorGlobalInputInputObject $shopifyCheckoutBrandingColorGlobalInputInputObject): static
    {
        $this->global = $shopifyCheckoutBrandingColorGlobalInputInputObject;

        return $this;
    }

    /**
     * The input to define color schemes which apply to different areas of the user interface.
     */
    public function setSchemes(ShopifyCheckoutBrandingColorSchemesInputInputObject $shopifyCheckoutBrandingColorSchemesInputInputObject): static
    {
        $this->schemes = $shopifyCheckoutBrandingColorSchemesInputInputObject;

        return $this;
    }
}
