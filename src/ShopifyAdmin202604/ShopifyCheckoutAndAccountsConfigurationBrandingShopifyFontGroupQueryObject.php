<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Shopify font group customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingShopifyFontGroup";

    /**
     * The base Shopify font.
     */
    public function selectBase(?ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupBaseArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The bold Shopify font.
     */
    public function selectBold(?ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupBoldArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject("bold");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The font loading strategy.
     */
    public function selectLoadingStrategy(): static
    {
        $this->selectField("loadingStrategy");

        return $this;
    }

    /**
     * The font group name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
