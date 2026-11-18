<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customer accounts store logo customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo";

    /**
     * The logo image.
     */
    public function selectImage(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoImageArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The maximum width of the logo.
     */
    public function selectMaxWidth(): static
    {
        $this->selectField("maxWidth");

        return $this;
    }
}
