<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the global color roles for checkout branding. These semantic colors maintain consistency across all checkout elements and provide the foundation for the checkout's visual design system.
 *
 * Use global colors to:
 * - Set brand colors for primary actions and buttons
 * - Define accent colors for links and interactive elements
 * - Configure semantic colors for success, warning, and error states
 * - Apply decorative colors for visual highlights
 *
 * For example, a merchant might set their brand blue for primary buttons, green for success messages, amber for warnings, and red for critical errors, creating a consistent color language throughout checkout.
 *
 * Learn more about [checkout customization](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBranding).
 */
class ShopifyCheckoutBrandingColorGlobalQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingColorGlobal";

    /**
     * A color used for interaction, like links and focus states.
     */
    public function selectAccent(): static
    {
        $this->selectField("accent");

        return $this;
    }

    /**
     * A color that's strongly associated with the merchant. Currently used for
     * primary buttons, for example **Pay now**, and secondary buttons, for example **Buy again**.
     */
    public function selectBrand(): static
    {
        $this->selectField("brand");

        return $this;
    }

    /**
     * A semantic color used for components that communicate critical content. For example, a blocking error such as the requirement to enter a valid credit card number.
     */
    public function selectCritical(): static
    {
        $this->selectField("critical");

        return $this;
    }

    /**
     * A color used to highlight certain areas of the user interface. For example, the [`Text`](https://shopify.dev/docs/api/checkout-ui-extensions/latest/components/titles-and-text/text#textprops-propertydetail-appearance) component.
     */
    public function selectDecorative(): static
    {
        $this->selectField("decorative");

        return $this;
    }

    /**
     * A semantic color used for components that communicate general, informative content.
     */
    public function selectInfo(): static
    {
        $this->selectField("info");

        return $this;
    }

    /**
     * A semantic color used for components that communicate successful actions or a positive state.
     */
    public function selectSuccess(): static
    {
        $this->selectField("success");

        return $this;
    }

    /**
     * A semantic color used for components that display content that requires attention. For example, something that might be wrong, but not blocking.
     */
    public function selectWarning(): static
    {
        $this->selectField("warning");

        return $this;
    }
}
