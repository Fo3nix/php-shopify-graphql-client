<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ShopifyPaymentsPayoutStatusEnumObject extends EnumObject
{
    const SCHEDULED = "SCHEDULED";
    const PAID = "PAID";
    const FAILED = "FAILED";
    const CANCELED = "CANCELED";
}
