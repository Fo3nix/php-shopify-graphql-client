<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines the visual styling for checkbox elements throughout the checkout interface, focusing on corner radius customization. This allows merchants to align checkbox appearance with their overall design aesthetic.
 *
 * For example, a modern minimalist brand might prefer sharp, square checkboxes while a friendly consumer brand could opt for rounded corners to create a softer, more approachable feel.
 *
 * The corner radius setting ensures checkboxes integrate seamlessly with the overall checkout design language and brand identity.
 */
class ShopifyCheckoutBrandingCheckboxQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCheckbox";

    /**
     * The corner radius used for checkboxes.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }
}
