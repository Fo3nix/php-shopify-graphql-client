<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The branding configuration for checkout and customer accounts.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBranding";

    /**
     * The components that apply to all surfaces.
     */
    public function selectComponents(?ShopifyCheckoutAndAccountsConfigurationBrandingComponentsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingComponentsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingComponentsQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The design tokens allow you to set values that represent specific attributes of your brand like color and font. These attributes are used throughout the user interface. This brings consistency and allows you to easily make broad design changes.
     */
    public function selectDesignTokens(?ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingDesignTokensQueryObject("designTokens");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The surface-specific customizations.
     */
    public function selectSurfaces(?ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesQueryObject("surfaces");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
