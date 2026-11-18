<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a base set of color customizations that's applied to an area of Checkout, from which
 * every component pulls its colors.
 */
class ShopifyCheckoutBrandingColorSchemeInputInputObject extends InputObject
{
    protected $base;
    protected $control;
    protected $primaryButton;
    protected $secondaryButton;

    /**
     * The main colors of a scheme. Used for the surface background, text, links, and more.
     */
    public function setBase(ShopifyCheckoutBrandingColorRolesInputInputObject $shopifyCheckoutBrandingColorRolesInputInputObject): static
    {
        $this->base = $shopifyCheckoutBrandingColorRolesInputInputObject;

        return $this;
    }

    /**
     * The colors of form controls, such as the [`TextField`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/textfield) and [`ChoiceList`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/choicelist) components.
     */
    public function setControl(ShopifyCheckoutBrandingControlColorRolesInputInputObject $shopifyCheckoutBrandingControlColorRolesInputInputObject): static
    {
        $this->control = $shopifyCheckoutBrandingControlColorRolesInputInputObject;

        return $this;
    }

    /**
     * The colors of the primary button. For example, the main payment, or **Pay now** button.
     */
    public function setPrimaryButton(ShopifyCheckoutBrandingButtonColorRolesInputInputObject $shopifyCheckoutBrandingButtonColorRolesInputInputObject): static
    {
        $this->primaryButton = $shopifyCheckoutBrandingButtonColorRolesInputInputObject;

        return $this;
    }

    /**
     * The colors of the secondary button, which is used for secondary actions. For example, **Buy again**.
     */
    public function setSecondaryButton(ShopifyCheckoutBrandingButtonColorRolesInputInputObject $shopifyCheckoutBrandingButtonColorRolesInputInputObject): static
    {
        $this->secondaryButton = $shopifyCheckoutBrandingButtonColorRolesInputInputObject;

        return $this;
    }
}
