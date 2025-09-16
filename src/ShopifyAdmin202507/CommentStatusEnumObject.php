<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CommentStatusEnumObject extends EnumObject
{
    const SPAM = "SPAM";
    const REMOVED = "REMOVED";
    const PUBLISHED = "PUBLISHED";
    const UNAPPROVED = "UNAPPROVED";
    const PENDING = "PENDING";
}
