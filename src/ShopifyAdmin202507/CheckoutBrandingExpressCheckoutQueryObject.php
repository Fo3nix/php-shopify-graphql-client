<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CheckoutBrandingExpressCheckoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingExpressCheckout";

    public function selectButton(CheckoutBrandingExpressCheckoutButtonArgumentsObject $argsObject = null)
    {
        $object = new CheckoutBrandingExpressCheckoutButtonQueryObject("button");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
