<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The possible types for a dispute.
 */
class ShopifyDisputeTypeEnumObject extends EnumObject
{
    /**
     * The dispute has turned into a chargeback.
     */
    const CHARGEBACK = "CHARGEBACK";
    /**
     * The dispute is in the inquiry phase.
     */
    const INQUIRY = "INQUIRY";
}
