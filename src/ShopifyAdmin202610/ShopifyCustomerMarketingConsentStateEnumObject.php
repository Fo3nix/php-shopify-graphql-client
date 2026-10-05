<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerMarketingConsentStateEnumObject extends EnumObject
{
    const NEVER_SUBSCRIBED = "NEVER_SUBSCRIBED";
    const PENDING = "PENDING";
    const SUBSCRIBED = "SUBSCRIBED";
    const UNSUBSCRIBED = "UNSUBSCRIBED";
    const REDACTED = "REDACTED";
}
