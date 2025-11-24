<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingColorSchemesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorSchemes";

    public function selectScheme1(ShopifyCheckoutBrandingColorSchemesScheme1ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheme2(ShopifyCheckoutBrandingColorSchemesScheme2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheme3(ShopifyCheckoutBrandingColorSchemesScheme3ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheme4(ShopifyCheckoutBrandingColorSchemesScheme4ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorSchemeQueryObject("scheme4");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
