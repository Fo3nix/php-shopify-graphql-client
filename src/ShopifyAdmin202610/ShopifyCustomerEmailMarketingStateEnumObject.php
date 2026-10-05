<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerEmailMarketingStateEnumObject extends EnumObject
{
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    const PENDING = "PENDING";
    const SUBSCRIBED = "SUBSCRIBED";
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    const REDACTED = "REDACTED";
    const INVALID = "INVALID";
}
