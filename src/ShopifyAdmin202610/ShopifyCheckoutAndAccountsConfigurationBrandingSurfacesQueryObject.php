<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The surface-specific component customizations for checkout and customer accounts.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSurfaces";

    /**
     * The checkout-specific component overrides.
     */
    public function selectCheckout(?ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesCheckoutArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceQueryObject("checkout");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer accounts-specific component overrides.
     */
    public function selectCustomerAccounts(?ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesCustomerAccountsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceQueryObject("customerAccounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sign-in-specific component overrides.
     */
    public function selectSignIn(?ShopifyCheckoutAndAccountsConfigurationBrandingSurfacesSignInArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceQueryObject("signIn");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
