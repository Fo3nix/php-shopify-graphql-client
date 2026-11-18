<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Controls the spacing between options in the 'group' variant of [`ChoiceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBrandingChoiceList) components.
 *
 * This setting adjusts the vertical spacing between choice options to improve readability and visual organization. The spacing value helps create clear separation between options, making it easier for customers to scan and select from available choices.
 *
 * Learn more about [checkout customization](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBranding).
 */
class ShopifyCheckoutBrandingChoiceListGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingChoiceListGroup";

    /**
     * The spacing between UI elements in the list.
     */
    public function selectSpacing(): static
    {
        $this->selectField("spacing");

        return $this;
    }
}
