<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DisputeStatusEnumObject extends EnumObject
{
    const ACCEPTED = "ACCEPTED";
    const LOST = "LOST";
    const NEEDS_RESPONSE = "NEEDS_RESPONSE";
    const UNDER_REVIEW = "UNDER_REVIEW";
    const WON = "WON";
}
