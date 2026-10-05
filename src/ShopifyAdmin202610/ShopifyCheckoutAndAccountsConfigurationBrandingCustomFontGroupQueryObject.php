<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomFontGroup";

    public function selectBase(ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupBaseArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject("base");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBold(ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroupBoldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontQueryObject("bold");
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
