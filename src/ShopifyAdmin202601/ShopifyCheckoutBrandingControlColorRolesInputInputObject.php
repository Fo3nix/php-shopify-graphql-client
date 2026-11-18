<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to define colors for form controls.
 */
class ShopifyCheckoutBrandingControlColorRolesInputInputObject extends InputObject
{
    protected $background;
    protected $text;
    protected $border;
    protected $icon;
    protected $accent;
    protected $decorative;
    protected $selected;

    /**
     * The color of the background.
     */
    public function setBackground($background): static
    {
        $this->background = $background;

        return $this;
    }

    /**
     * The color of text.
     */
    public function setText($text): static
    {
        $this->text = $text;

        return $this;
    }

    /**
     * The color of borders.
     */
    public function setBorder($border): static
    {
        $this->border = $border;

        return $this;
    }

    /**
     * The color of icons.
     */
    public function setIcon($icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * The color of accented objects (links and focused state).
     */
    public function setAccent($accent): static
    {
        $this->accent = $accent;

        return $this;
    }

    /**
     * The decorative color for highlighting specific parts of the user interface.
     */
    public function setDecorative($decorative): static
    {
        $this->decorative = $decorative;

        return $this;
    }

    /**
     * The colors of selected controls.
     */
    public function setSelected(ShopifyCheckoutBrandingColorRolesInputInputObject $shopifyCheckoutBrandingColorRolesInputInputObject): static
    {
        $this->selected = $shopifyCheckoutBrandingColorRolesInputInputObject;

        return $this;
    }
}
