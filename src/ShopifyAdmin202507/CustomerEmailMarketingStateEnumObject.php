<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerEmailMarketingStateEnumObject extends EnumObject
{
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    const PENDING = "PENDING";
    const SUBSCRIBED = "SUBSCRIBED";
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    const REDACTED = "REDACTED";
    const INVALID = "INVALID";
}
