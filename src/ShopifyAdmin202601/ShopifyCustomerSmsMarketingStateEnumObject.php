<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerSmsMarketingStateEnumObject extends EnumObject
{
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    const PENDING = "PENDING";
    const SUBSCRIBED = "SUBSCRIBED";
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    const REDACTED = "REDACTED";
}
