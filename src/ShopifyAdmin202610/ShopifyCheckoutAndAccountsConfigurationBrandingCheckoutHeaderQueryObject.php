<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The checkout header customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCheckoutHeader";

    /**
     * The header alignment.
     */
    public function selectAlignment(): static
    {
        $this->selectField("alignment");

        return $this;
    }

    /**
     * The background style of the header container.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }

    /**
     * The cart link customizations for 1-page checkout. This field allows to customize the cart icon that renders by default on 1-page checkout.
     */
    public function selectCartLink(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderCartLinkArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLinkQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingHeaderCartLinkQueryObject("cartLink");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
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
     * The store logo.
     */
    public function selectLogo(?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeaderLogoArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingLogoQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingLogoQueryObject("logo");
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

    /**
     * The header position.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }
}
