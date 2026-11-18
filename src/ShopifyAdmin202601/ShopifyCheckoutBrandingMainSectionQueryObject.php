<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The main sections customizations.
 */
class ShopifyCheckoutBrandingMainSectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingMainSection";

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
     * The selected color scheme of the main sections.
     */
    public function selectColorScheme(): static
    {
        $this->selectField("colorScheme");

        return $this;
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
