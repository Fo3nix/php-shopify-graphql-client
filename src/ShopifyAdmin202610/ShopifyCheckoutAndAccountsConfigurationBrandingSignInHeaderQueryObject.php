<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The sign-in header customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSignInHeader";

    /**
     * The store logo.
     */
    public function selectLogo(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeaderLogoArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogoQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSignInLogoQueryObject("logo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The padding of the header container.
     */
    public function selectPadding(): static
    {
        $this->selectField("padding");

        return $this;
    }
}
