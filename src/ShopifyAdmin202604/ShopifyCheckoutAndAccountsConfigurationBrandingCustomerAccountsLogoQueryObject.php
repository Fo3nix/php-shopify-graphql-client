<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsLogo";

    public function selectImage(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingImageValueUnionObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMaxWidth()
    {
        $this->selectField("maxWidth");

        return $this;
    }
}
