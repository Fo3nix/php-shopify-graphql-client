<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for customizing a base set of colors, from which every component pulls its colors.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingColorsInputInputObject extends InputObject
{
    protected $base;
    protected $control;
    protected $primaryButton;
    protected $secondaryButton;

    /**
     * The main colors, used for the surface background, text, links, and more.
     */
    public function setBase(ShopifyCheckoutAndAccountsConfigurationBrandingBaseColorRolesInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingBaseColorRolesInputInputObject): static
    {
        $this->base = $shopifyCheckoutAndAccountsConfigurationBrandingBaseColorRolesInputInputObject;

        return $this;
    }

    /**
     * The colors of form controls, such as the [`TextField`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/textfield) and [`ChoiceList`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/forms/choicelist) components.
     */
    public function setControl(ShopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesInputInputObject): static
    {
        $this->control = $shopifyCheckoutAndAccountsConfigurationBrandingControlColorRolesInputInputObject;

        return $this;
    }

    /**
     * The colors of the primary button. For example, the main payment, or **Pay now** button.
     */
    public function setPrimaryButton(ShopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRolesInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRolesInputInputObject): static
    {
        $this->primaryButton = $shopifyCheckoutAndAccountsConfigurationBrandingPrimaryButtonColorRolesInputInputObject;

        return $this;
    }

    /**
     * The colors of the secondary button, which is used for secondary actions. For example, **Buy again**.
     */
    public function setSecondaryButton(ShopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRolesInputInputObject $shopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRolesInputInputObject): static
    {
        $this->secondaryButton = $shopifyCheckoutAndAccountsConfigurationBrandingSecondaryButtonColorRolesInputInputObject;

        return $this;
    }
}
