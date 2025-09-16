<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DraftOrderStatusEnumObject extends EnumObject
{
    const COMPLETED = "COMPLETED";
    const INVOICE_SENT = "INVOICE_SENT";
    const OPEN = "OPEN";
}
