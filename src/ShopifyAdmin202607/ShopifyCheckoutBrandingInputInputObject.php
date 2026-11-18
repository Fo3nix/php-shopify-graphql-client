<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields used to upsert the checkout branding settings.
 */
class ShopifyCheckoutBrandingInputInputObject extends InputObject
{
    protected $designSystem;
    protected $customizations;

    /**
     * The design system allows you to set values that represent specific attributes
     * of your brand like color and font. These attributes are used throughout the user
     * interface. This brings consistency and allows you to easily make broad design changes.
     */
    public function setDesignSystem(ShopifyCheckoutBrandingDesignSystemInputInputObject $shopifyCheckoutBrandingDesignSystemInputInputObject): static
    {
        $this->designSystem = $shopifyCheckoutBrandingDesignSystemInputInputObject;

        return $this;
    }

    /**
     * The customizations that apply to specific components or areas of the user interface.
     */
    public function setCustomizations(ShopifyCheckoutBrandingCustomizationsInputInputObject $shopifyCheckoutBrandingCustomizationsInputInputObject): static
    {
        $this->customizations = $shopifyCheckoutBrandingCustomizationsInputInputObject;

        return $this;
    }
}
