<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The checkout-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCheckoutSurface";

    /**
     * The checkout components.
     */
    public function selectComponents(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutSurfaceComponentsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponentsQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
