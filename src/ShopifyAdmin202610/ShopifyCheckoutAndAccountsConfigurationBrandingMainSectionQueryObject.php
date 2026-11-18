<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The main sections customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingMainSection";

    /**
     * The background style of the main sections.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }

    /**
     * The border for the main sections.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The border style of the main sections.
     */
    public function selectBorderStyle(): static
    {
        $this->selectField("borderStyle");

        return $this;
    }

    /**
     * The border width of the main sections.
     */
    public function selectBorderWidth(): static
    {
        $this->selectField("borderWidth");

        return $this;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingMainSectionColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The corner radius of the main sections.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The padding of the main sections.
     */
    public function selectPadding(): static
    {
        $this->selectField("padding");

        return $this;
    }

    /**
     * The shadow of the main sections.
     */
    public function selectShadow(): static
    {
        $this->selectField("shadow");

        return $this;
    }
}
