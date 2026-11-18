<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to customize the overall look and feel of the checkout.
 */
class ShopifyCheckoutBrandingColorGlobalInputInputObject extends InputObject
{
    protected $info;
    protected $success;
    protected $warning;
    protected $critical;
    protected $brand;
    protected $accent;
    protected $decorative;

    /**
     * A semantic color used for components that communicate general, informative content.
     */
    public function setInfo($info): static
    {
        $this->info = $info;

        return $this;
    }

    /**
     * A semantic color used for components that communicate successful actions or a positive state.
     */
    public function setSuccess($success): static
    {
        $this->success = $success;

        return $this;
    }

    /**
     * A semantic color used for components that display content that requires attention. For example, something that might be wrong, but not blocking.
     */
    public function setWarning($warning): static
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * A semantic color used for components that communicate critical content. For example, a blocking error such as the requirement to enter a valid credit card number.
     */
    public function setCritical($critical): static
    {
        $this->critical = $critical;

        return $this;
    }

    /**
     * A color that's strongly associated with the merchant. Currently used for
     * primary buttons, such as **Pay now**, and secondary buttons, such as **Buy again**.
     */
    public function setBrand($brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * A color used for interaction, like links and focus states.
     */
    public function setAccent($accent): static
    {
        $this->accent = $accent;

        return $this;
    }

    /**
     * A color used to highlight certain areas of the user interface. For example, the [`Text`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/titles-and-text/text#textprops-propertydetail-appearance) component.
     */
    public function setDecorative($decorative): static
    {
        $this->decorative = $decorative;

        return $this;
    }
}
