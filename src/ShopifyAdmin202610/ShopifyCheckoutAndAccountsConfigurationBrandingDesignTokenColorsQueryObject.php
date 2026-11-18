<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The color customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokenColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingDesignTokenColors";

    /**
     * A set of colors used together on a surface.
     */
    public function selectPalette(?ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokenColorsPaletteArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingPaletteQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingPaletteQueryObject("palette");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
