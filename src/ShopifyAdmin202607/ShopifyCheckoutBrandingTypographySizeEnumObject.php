<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible choices for the font size.
 *
 * Note that the value in pixels of these settings can be customized with the
 * [typography size](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CheckoutBrandingFontSizeInput)
 * object. Refer to the [typography tutorial](https://shopify.dev/docs/apps/checkout/styling/customize-typography)
 * for more information.
 */
class ShopifyCheckoutBrandingTypographySizeEnumObject extends EnumObject
{
    /**
     * The extra small font size. Example: 10px.
     */
    const EXTRA_SMALL = "EXTRA_SMALL";
    /**
     * The small font size. Example: 12px.
     */
    const SMALL = "SMALL";
    /**
     * The base font size. Example: 14px.
     */
    const BASE = "BASE";
    /**
     * The medium font size. Example: 16px.
     */
    const MEDIUM = "MEDIUM";
    /**
     * The large font size. Example: 19px.
     */
    const LARGE = "LARGE";
    /**
     * The extra large font size. Example: 21px.
     */
    const EXTRA_LARGE = "EXTRA_LARGE";
    /**
     * The extra extra large font size. Example: 24px.
     */
    const EXTRA_EXTRA_LARGE = "EXTRA_EXTRA_LARGE";
}
