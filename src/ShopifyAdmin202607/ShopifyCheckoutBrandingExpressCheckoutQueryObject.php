<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutBrandingExpressCheckoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingExpressCheckout";

    public function selectButton(ShopifyCheckoutBrandingExpressCheckoutButtonArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutBrandingExpressCheckoutButtonQueryObject("button");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
