<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing shared colors.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingSharedColorsInputInputObject extends InputObject
{
    protected $accent;
    protected $button;
    protected $control;
    protected $decorative;
    protected $critical;
    protected $success;
    protected $warning;
    protected $info;

    /**
     * The accent color for interactive elements.
     */
    public function setAccent($accent): static
    {
        $this->accent = $accent;

        return $this;
    }

    /**
     * The button color.
     */
    public function setButton($button): static
    {
        $this->button = $button;

        return $this;
    }

    /**
     * The form control color.
     */
    public function setControl($control): static
    {
        $this->control = $control;

        return $this;
    }

    /**
     * The decorative color.
     */
    public function setDecorative($decorative): static
    {
        $this->decorative = $decorative;

        return $this;
    }

    /**
     * The critical/error color.
     */
    public function setCritical($critical): static
    {
        $this->critical = $critical;

        return $this;
    }

    /**
     * The success color.
     */
    public function setSuccess($success): static
    {
        $this->success = $success;

        return $this;
    }

    /**
     * The warning color.
     */
    public function setWarning($warning): static
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * The informational color.
     */
    public function setInfo($info): static
    {
        $this->info = $info;

        return $this;
    }
}
