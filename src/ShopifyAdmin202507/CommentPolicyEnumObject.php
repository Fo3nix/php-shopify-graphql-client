<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CommentPolicyEnumObject extends EnumObject
{
    const AUTO_PUBLISHED = "AUTO_PUBLISHED";
    const CLOSED = "CLOSED";
    const MODERATED = "MODERATED";
}
