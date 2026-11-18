<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The sign-in-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSignInComponents";

    /**
     * The header customizations.
     */
    public function selectHeader(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsHeaderArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderQueryObject("header");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The main customizations.
     */
    public function selectMain(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsMainArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSignInMainQueryObject("main");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
