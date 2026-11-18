<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customer accounts-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsComponents";

    /**
     * The footer customizations.
     */
    public function selectFooter(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsFooterArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterQueryObject("footer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The header customizations.
     */
    public function selectHeader(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsHeaderArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main customer accounts customizations.
     */
    public function selectMain(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsMainArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
