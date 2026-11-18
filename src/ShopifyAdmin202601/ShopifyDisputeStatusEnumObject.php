<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible statuses of a dispute.
 */
class ShopifyDisputeStatusEnumObject extends EnumObject
{
    const ACCEPTED = "ACCEPTED";
    const LOST = "LOST";
    const NEEDS_RESPONSE = "NEEDS_RESPONSE";
    const UNDER_REVIEW = "UNDER_REVIEW";
    const WON = "WON";
}
