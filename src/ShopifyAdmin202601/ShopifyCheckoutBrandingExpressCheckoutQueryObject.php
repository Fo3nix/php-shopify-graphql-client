<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Express Checkout customizations.
 */
class ShopifyCheckoutBrandingExpressCheckoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingExpressCheckout";

    /**
     * The Express Checkout buttons customizations.
     */
    public function selectButton(?ShopifyCheckoutBrandingExpressCheckoutButtonArgumentsObject $argsObject = null): ShopifyCheckoutBrandingExpressCheckoutButtonQueryObject
    {
        $object = new ShopifyCheckoutBrandingExpressCheckoutButtonQueryObject("button");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
