<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A container for the footer section customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingFooter";

    /**
     * The footer alignment.
     */
    public function selectAlignment(): static
    {
        $this->selectField("alignment");

        return $this;
    }

    /**
     * The background style of the footer container.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingFooterColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The footer content settings.
     */
    public function selectContent(?ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentQueryObject("content");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The divided setting.
     */
    public function selectDivided(): static
    {
        $this->selectField("divided");

        return $this;
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
