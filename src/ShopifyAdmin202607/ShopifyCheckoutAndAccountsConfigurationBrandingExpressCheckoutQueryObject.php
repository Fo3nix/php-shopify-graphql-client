<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Express Checkout customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingExpressCheckout";

    /**
     * The Express Checkout buttons customizations.
     */
    public function selectButton(?ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonQueryObject("button");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
