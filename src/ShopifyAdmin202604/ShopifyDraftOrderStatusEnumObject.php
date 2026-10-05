<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDraftOrderStatusEnumObject extends EnumObject
{
    const COMPLETED = "COMPLETED";
    const INVOICE_SENT = "INVOICE_SENT";
    const OPEN = "OPEN";
}
