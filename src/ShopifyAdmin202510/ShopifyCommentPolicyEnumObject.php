<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCommentPolicyEnumObject extends EnumObject
{
    const AUTO_PUBLISHED = "AUTO_PUBLISHED";
    const CLOSED = "CLOSED";
    const MODERATED = "MODERATED";
}
