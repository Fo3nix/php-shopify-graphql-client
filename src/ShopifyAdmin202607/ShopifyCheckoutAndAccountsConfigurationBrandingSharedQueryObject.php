<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shared customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingShared";

    /**
     * The shared color customizations for semantic and functional colors.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shared corner radius setting that overrides all other [corner radius](https://shopify.dev/docs/api/admin-graphql/latest/enums/CheckoutAndAccountsConfigurationBrandingCornerRadius) customizations.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The shared typography customizations.
     */
    public function selectTypography(?ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
