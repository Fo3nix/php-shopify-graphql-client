<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The public-facing category for an app.
 */
class ShopifyAppPublicCategoryEnumObject extends EnumObject
{
    /**
     * The app's public category is [private](https://shopify.dev/apps/distribution#deprecated-app-types).
     */
    const PRIVATE = "PRIVATE";
    /**
     * The app's public category is [public](https://shopify.dev/apps/distribution#capabilities-and-requirements).
     */
    const PUBLIC = "PUBLIC";
    /**
     * The app's public category is [custom](https://shopify.dev/apps/distribution#capabilities-and-requirements).
     */
    const CUSTOM = "CUSTOM";
    /**
     * The app's public category is other. An app is in this category if it's not classified under any of the other app types (private, public, or custom).
     */
    const OTHER = "OTHER";
}
