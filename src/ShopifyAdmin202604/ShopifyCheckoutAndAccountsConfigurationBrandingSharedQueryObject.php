<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingSharedQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingShared";

    public function selectColors(ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCornerRadius()
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    public function selectTypography(ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSharedTypographyStyleQueryObject("typography");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
