<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyAbandonmentEmailStateEnumObject extends EnumObject
{
    const NOT_SENT = "NOT_SENT";
    const SENT = "SENT";
    const SCHEDULED = "SCHEDULED";
}
