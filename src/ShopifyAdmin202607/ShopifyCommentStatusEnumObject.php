<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a comment.
 */
class ShopifyCommentStatusEnumObject extends EnumObject
{
    /**
     * The comment is marked as spam.
     */
    const SPAM = "SPAM";
    /**
     * The comment has been removed.
     */
    const REMOVED = "REMOVED";
    /**
     * The comment is published.
     */
    const PUBLISHED = "PUBLISHED";
    /**
     * The comment is unapproved.
     */
    const UNAPPROVED = "UNAPPROVED";
    /**
     * The comment is pending approval.
     */
    const PENDING = "PENDING";
}
