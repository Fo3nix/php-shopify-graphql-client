<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The checkout header customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsHeader";

    /**
     * The header alignment.
     */
    public function selectAlignment(): static
    {
        $this->selectField("alignment");

        return $this;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The store logo.
     */
    public function selectLogo(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeaderLogoArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsLogoQueryObject("logo");
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
