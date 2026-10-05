<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColors";

    public function selectGlobal(ShopifyCheckoutBrandingColorsGlobalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorGlobalQueryObject("global");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSchemes(ShopifyCheckoutBrandingColorsSchemesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingColorSchemesQueryObject("schemes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
