<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColors";

    public function selectGlobal(CheckoutBrandingColorsGlobalArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorGlobalQueryObject("global");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSchemes(CheckoutBrandingColorsSchemesArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingColorSchemesQueryObject("schemes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
