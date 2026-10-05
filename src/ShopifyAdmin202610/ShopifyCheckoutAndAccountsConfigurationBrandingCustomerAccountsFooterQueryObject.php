<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsFooter";

    public function selectAlignment()
    {
        $this->selectField("alignment");

        return $this;
    }

    public function selectColors(ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterColorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPadding()
    {
        $this->selectField("padding");

        return $this;
    }
}
