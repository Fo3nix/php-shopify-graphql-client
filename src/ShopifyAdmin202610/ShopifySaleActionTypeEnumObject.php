<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The action taken on a sale record. The action type describes the business action, not its accounting treatment. Use the sale's line type and details to determine how to account for the entry. For write-offs, the `WRITE_OFF` line type identifies the entry as a write-off, and its classification, such as `WAIVED`, describes the type of write-off.
 */
class ShopifySaleActionTypeEnumObject extends EnumObject
{
    /**
     * A purchase, charge, or write-off creation. Creating a write-off reduces the amount the buyer owes.
     */
    const ORDER = "ORDER";
    /**
     * A removal, return, or write-off reversal. Reversing a write-off restores the amount the buyer owes.
     */
    const RETURN = "RETURN";
    /**
     * A change to the price, taxes, or discounts for a prior purchase.
     */
    const UPDATE = "UPDATE";
    /**
     * An unknown order action. Represents new actions that may be added in future versions.
     */
    const UNKNOWN = "UNKNOWN";
}
