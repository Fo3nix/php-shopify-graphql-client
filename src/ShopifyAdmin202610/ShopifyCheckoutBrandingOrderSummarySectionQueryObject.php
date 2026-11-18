<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The order summary sections customizations.
 */
class ShopifyCheckoutBrandingOrderSummarySectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingOrderSummarySection";

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
     * The selected color scheme of the order summary sections.
     */
    public function selectColorScheme(): static
    {
        $this->selectField("colorScheme");

        return $this;
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
