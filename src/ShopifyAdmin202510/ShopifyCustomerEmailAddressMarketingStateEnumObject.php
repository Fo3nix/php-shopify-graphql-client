<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\EnumObject;

class ShopifyCustomerEmailAddressMarketingStateEnumObject extends EnumObject
{
    const INVALID = "INVALID";
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    const PENDING = "PENDING";
    const SUBSCRIBED = "SUBSCRIBED";
    const UNSUBSCRIBED = "UNSUBSCRIBED";
}
