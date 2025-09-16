<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class PaypalExpressSubscriptionsGatewayStatusEnumObject extends EnumObject
{
    const ENABLED = "ENABLED";
    const DISABLED = "DISABLED";
    const PENDING = "PENDING";
}
