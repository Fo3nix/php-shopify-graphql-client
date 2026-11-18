<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible choices to override corner radius customizations on all applicable objects. Note that this selection
 * can only be used to set the override to `NONE` (0px).
 *
 * For more customizations options, set the [corner radius](https://shopify.dev/docs/api/admin-graphql/latest/enums/CheckoutBrandingCornerRadius)
 * selection on specific objects while leaving the global corner radius unset.
 */
class ShopifyCheckoutBrandingGlobalCornerRadiusEnumObject extends EnumObject
{
    /**
     * Set the global corner radius override to 0px (square corners).
     */
    const NONE = "NONE";
}
