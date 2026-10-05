<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingShopifyFontGroup";

    public function selectBase(ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupBaseArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBold(ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroupBoldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject("bold");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLoadingStrategy()
    {
        $this->selectField("loadingStrategy");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
