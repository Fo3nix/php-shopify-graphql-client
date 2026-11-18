<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customer accounts-specific main customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsMain";

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer accounts main section.
     */
    public function selectSection(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainSectionArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainSectionQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainSectionQueryObject("section");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
