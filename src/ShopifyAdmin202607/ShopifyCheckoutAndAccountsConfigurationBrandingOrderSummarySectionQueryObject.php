<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The order summary sections customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingOrderSummarySection";

    /**
     * The background style of the order summary sections.
     */
    public function selectBackground(): static
    {
        $this->selectField("background");

        return $this;
    }

    /**
     * The border for the order summary sections.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * The border style of the order summary sections.
     */
    public function selectBorderStyle(): static
    {
        $this->selectField("borderStyle");

        return $this;
    }

    /**
     * The border width of the order summary sections.
     */
    public function selectBorderWidth(): static
    {
        $this->selectField("borderWidth");

        return $this;
    }

    /**
     * The colors customizations.
     */
    public function selectColors(?ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummarySectionColorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationBrandingColorsQueryObject("colors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The corner radius of the order summary sections.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The padding of the order summary sections.
     */
    public function selectPadding(): static
    {
        $this->selectField("padding");

        return $this;
    }

    /**
     * The shadow of the order summary sections.
     */
    public function selectShadow(): static
    {
        $this->selectField("shadow");

        return $this;
    }
}
