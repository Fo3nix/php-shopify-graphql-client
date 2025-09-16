<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CustomerEmailAddressMarketingStateEnumObject extends EnumObject
{
    const INVALID = "INVALID";
    const NOT_SUBSCRIBED = "NOT_SUBSCRIBED";
    const PENDING = "PENDING";
    const SUBSCRIBED = "SUBSCRIBED";
    const UNSUBSCRIBED = "UNSUBSCRIBED";
}
