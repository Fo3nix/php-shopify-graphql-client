<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A container for the customer accounts footer section customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCustomerAccountsFooter";

    /**
     * The footer alignment.
     */
    public function selectAlignment(): static
    {
        $this->selectField("alignment");

        return $this;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooterColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The padding of the footer container.
     */
    public function selectPadding(): static
    {
        $this->selectField("padding");

        return $this;
    }
}
