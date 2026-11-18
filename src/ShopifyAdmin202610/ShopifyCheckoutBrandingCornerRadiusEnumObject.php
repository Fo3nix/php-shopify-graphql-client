<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The options for customizing the corner radius of checkout-related objects. Examples include the primary
 * button, the name text fields and the sections within the main area (if they have borders).
 * Refer to this complete [list](https://shopify.dev/docs/api/admin-graphql/latest/enums/CheckoutBrandingCornerRadius#fieldswith)
 * for objects with customizable corner radii.
 *
 * The design system defines the corner radius pixel size for each option. Modify the defaults by setting the
 * [designSystem.cornerRadius](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CheckoutBrandingDesignSystemInput#field-checkoutbrandingdesignsysteminput-cornerradius)
 * input fields.
 */
class ShopifyCheckoutBrandingCornerRadiusEnumObject extends EnumObject
{
    /**
     * The 0px corner radius (square corners).
     */
    const NONE = "NONE";
    /**
     * The corner radius with a pixel value defined by designSystem.cornerRadius.small.
     */
    const SMALL = "SMALL";
    /**
     * The corner radius with a pixel value defined by designSystem.cornerRadius.base.
     */
    const BASE = "BASE";
    /**
     * The corner radius with a pixel value defined by designSystem.cornerRadius.large.
     */
    const LARGE = "LARGE";
}
