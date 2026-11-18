<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * Stable identifier for why a collection cannot be referenced as a sub-collection target.
 */
class ShopifySubCollectionIneligibleReasonEnumObject extends EnumObject
{
    /**
     * The referenced collection id does not parse as a positive integer or does not exist in the shop.
     */
    const INVALID_COLLECTION_REFERENCE = "INVALID_COLLECTION_REFERENCE";
    /**
     * The referenced collection is one of the source's owning collections (a source cannot reference itself).
     */
    const SELF_REFERENCE = "SELF_REFERENCE";
    /**
     * The referenced collection itself owns a sub-collection source (chains of depth > 1 are not supported).
     */
    const CHAIN_REFERENCE = "CHAIN_REFERENCE";
}
