<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible statuses of a dispute.
 */
class ShopifyDisputeStatusEnumObject extends EnumObject
{
    const ACCEPTED = "ACCEPTED";
    const LOST = "LOST";
    const NEEDS_RESPONSE = "NEEDS_RESPONSE";
    /**
     * A dispute that was prevented from becoming a formal chargeback.
     */
    const PREVENTED = "PREVENTED";
    const UNDER_REVIEW = "UNDER_REVIEW";
    const WON = "WON";
}
