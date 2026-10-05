<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingFooter";

    public function selectAlignment()
    {
        $this->selectField("alignment");

        return $this;
    }

    public function selectBackground()
    {
        $this->selectField("background");

        return $this;
    }

    public function selectColors(ShopifyCheckoutAndAccountsConfigurationBrandingFooterColorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContent(ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDivided()
    {
        $this->selectField("divided");

        return $this;
    }

    public function selectPadding()
    {
        $this->selectField("padding");

        return $this;
    }
}
