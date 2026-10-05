<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

class ShopifyDisputeStatusEnumObject extends EnumObject
{
    const ACCEPTED = "ACCEPTED";
    const LOST = "LOST";
    const NEEDS_RESPONSE = "NEEDS_RESPONSE";
    const PREVENTED = "PREVENTED";
    const UNDER_REVIEW = "UNDER_REVIEW";
    const WON = "WON";
}
