<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The design token customizations allow you to set values that represent specific attributes of your brand like color and font. These attributes are used throughout the user interface. This brings consistency and allows you to easily make broad design changes.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingDesignTokens";

    /**
     * The colors for global colors.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokenColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokenColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The corner radius variables.
     */
    public function selectCornerRadius(?ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensCornerRadiusArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCornerRadiusVariablesQueryObject("cornerRadius");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The typography.
     */
    public function selectTypography(?ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensTypographyArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingTypographyQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingTypographyQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
