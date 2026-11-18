<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update the form controls customizations.
 */
class ShopifyCheckoutBrandingControlInputInputObject extends InputObject
{
    protected $color;
    protected $cornerRadius;
    protected $border;
    protected $labelPosition;

    /**
     * Set to TRANSPARENT to define transparent form controls. If null, form controls inherit colors from their scheme settings (for example, the main section inherits from `design_system.colors.schemes.scheme1.control` by default). Note that usage of the `customizations.control.color` setting to customize the form control color is deprecated.
     */
    public function setColor($shopifyCheckoutBrandingColorSelection): static
    {
        $this->color = new RawObject($shopifyCheckoutBrandingColorSelection);

        return $this;
    }

    /**
     * The corner radius used for form controls.
     */
    public function setCornerRadius($shopifyCheckoutBrandingCornerRadius): static
    {
        $this->cornerRadius = new RawObject($shopifyCheckoutBrandingCornerRadius);

        return $this;
    }

    /**
     * The border used for form controls.
     */
    public function setBorder($shopifyCheckoutBrandingSimpleBorder): static
    {
        $this->border = new RawObject($shopifyCheckoutBrandingSimpleBorder);

        return $this;
    }

    /**
     * The label position used for form controls.
     */
    public function setLabelPosition($shopifyCheckoutBrandingLabelPosition): static
    {
        $this->labelPosition = new RawObject($shopifyCheckoutBrandingLabelPosition);

        return $this;
    }
}
