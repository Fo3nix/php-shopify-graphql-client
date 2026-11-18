<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customer accounts-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsSurface";

    /**
     * The customer accounts components.
     */
    public function selectComponents(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsSurfaceComponentsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponentsQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
