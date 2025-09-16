<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class AbandonmentEmailStateEnumObject extends EnumObject
{
    const NOT_SENT = "NOT_SENT";
    const SENT = "SENT";
    const SCHEDULED = "SCHEDULED";
}
