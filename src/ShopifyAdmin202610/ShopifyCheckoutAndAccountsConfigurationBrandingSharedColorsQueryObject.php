<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Shared color customizations for semantic and functional colors.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingSharedColors";

    /**
     * The accent color for interactive elements.
     */
    public function selectAccent(): static
    {
        $this->selectField("accent");

        return $this;
    }

    /**
     * The button color.
     */
    public function selectButton(): static
    {
        $this->selectField("button");

        return $this;
    }

    /**
     * The form control color.
     */
    public function selectControl(): static
    {
        $this->selectField("control");

        return $this;
    }

    /**
     * The critical/error color.
     */
    public function selectCritical(): static
    {
        $this->selectField("critical");

        return $this;
    }

    /**
     * The decorative color.
     */
    public function selectDecorative(): static
    {
        $this->selectField("decorative");

        return $this;
    }

    /**
     * The informational color.
     */
    public function selectInfo(): static
    {
        $this->selectField("info");

        return $this;
    }

    /**
     * The success color.
     */
    public function selectSuccess(): static
    {
        $this->selectField("success");

        return $this;
    }

    /**
     * The warning color.
     */
    public function selectWarning(): static
    {
        $this->selectField("warning");

        return $this;
    }
}
