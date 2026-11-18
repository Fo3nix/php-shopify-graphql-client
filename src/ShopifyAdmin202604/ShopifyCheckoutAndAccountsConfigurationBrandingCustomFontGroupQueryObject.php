<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The custom font group customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomFontGroup";

    /**
     * The base custom font.
     */
    public function selectBase(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupBaseArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The bold custom font.
     */
    public function selectBold(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupBoldArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject("bold");
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
