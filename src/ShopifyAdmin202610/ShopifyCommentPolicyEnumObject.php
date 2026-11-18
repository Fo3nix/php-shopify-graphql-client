<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible comment policies for a blog.
 */
class ShopifyCommentPolicyEnumObject extends EnumObject
{
    /**
     * Readers can post comments to blog articles without moderation.
     */
    const AUTO_PUBLISHED = "AUTO_PUBLISHED";
    /**
     * Readers cannot post comments to blog articles.
     */
    const CLOSED = "CLOSED";
    /**
     * Readers can post comments to blog articles, but comments must be moderated before they appear.
     */
    const MODERATED = "MODERATED";
}
