<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A container for the checkout footer section customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCheckoutFooter";

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
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
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
    public function selectContent(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooterContentArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentQueryObject
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

    /**
     * The footer position.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }
}
