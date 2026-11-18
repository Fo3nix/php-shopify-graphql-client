<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing the colors.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensColorsInputInputObject extends InputObject
{
    protected $palette;

    /**
     * The input to update the color palette.
     */
    public function setPalette(ShopifyCheckoutAndAccountsConfigurationBrandingPaletteInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingPaletteInputInputObject): static
    {
        $this->palette = $shopifyCheckoutAndAccountsConfigurationBrandingPaletteInputInputObject;

        return $this;
    }
}
