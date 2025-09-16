<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingColorSchemesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorSchemes";

    public function selectScheme1(CheckoutBrandingColorSchemesScheme1ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorSchemeQueryObject("scheme1");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheme2(CheckoutBrandingColorSchemesScheme2ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorSchemeQueryObject("scheme2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheme3(CheckoutBrandingColorSchemesScheme3ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorSchemeQueryObject("scheme3");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheme4(CheckoutBrandingColorSchemesScheme4ArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorSchemeQueryObject("scheme4");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
