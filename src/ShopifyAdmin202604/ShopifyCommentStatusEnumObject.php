<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCommentStatusEnumObject extends EnumObject
{
    const SPAM = "SPAM";
    const REMOVED = "REMOVED";
    const PUBLISHED = "PUBLISHED";
    const UNAPPROVED = "UNAPPROVED";
    const PENDING = "PENDING";
}
