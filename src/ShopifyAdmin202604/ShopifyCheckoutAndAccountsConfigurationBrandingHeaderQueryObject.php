<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The header customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingHeaderQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingHeader";

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
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingHeaderColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
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
    public function selectLogo(?ShopifyCheckoutAndAccountsConfigurationBrandingHeaderLogoArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingLogoQueryObject
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
}
