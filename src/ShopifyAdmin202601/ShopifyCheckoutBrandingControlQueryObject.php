<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The form controls customizations.
 */
class ShopifyCheckoutBrandingControlQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingControl";

    /**
     * The border used for form controls.
     */
    public function selectBorder(): static
    {
        $this->selectField("border");

        return $this;
    }

    /**
     * Set to TRANSPARENT to define transparent form controls. If null, form controls inherit colors from their scheme settings (for example, the main section inherits from `design_system.colors.schemes.scheme1.control` by default). Note that usage of the `customizations.control.color` setting to customize the form control color is deprecated.
     */
    public function selectColor(): static
    {
        $this->selectField("color");

        return $this;
    }

    /**
     * The corner radius used for form controls.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }

    /**
     * The label position used for form controls.
     */
    public function selectLabelPosition(): static
    {
        $this->selectField("labelPosition");

        return $this;
    }
}
