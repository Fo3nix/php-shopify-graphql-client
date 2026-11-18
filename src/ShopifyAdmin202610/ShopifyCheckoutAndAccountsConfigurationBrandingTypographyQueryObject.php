<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The typography customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingTypographyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingTypography";

    /**
     * The font group used for most components such as text, buttons and form controls.
     */
    public function selectPrimary(?ShopifyCheckoutAndAccountsConfigurationBrandingTypographyPrimaryArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupUnionObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupUnionObject("primary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The font group used for heading components by default.
     */
    public function selectSecondary(?ShopifyCheckoutAndAccountsConfigurationBrandingTypographySecondaryArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupUnionObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupUnionObject("secondary");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The font size (base size in pixels and scaling between different sizes).
     */
    public function selectSize(?ShopifyCheckoutAndAccountsConfigurationBrandingTypographySizeArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingFontSizeQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFontSizeQueryObject("size");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
