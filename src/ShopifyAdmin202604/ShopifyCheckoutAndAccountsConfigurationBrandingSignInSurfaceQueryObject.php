<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The sign-in-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSignInSurface";

    /**
     * The sign-in components.
     */
    public function selectComponents(?ShopifyCheckoutAndAccountsConfigurationBrandingSignInSurfaceComponentsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponentsQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
