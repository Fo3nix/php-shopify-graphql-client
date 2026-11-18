<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason for returning the return line item.
 */
class ShopifyReturnReasonEnumObject extends EnumObject
{
    /**
     * The item is returned because the size was too small. Displays as **Size was too small**.
     */
    const SIZE_TOO_SMALL = "SIZE_TOO_SMALL";
    /**
     * The item is returned because the size was too large. Displays as **Size was too large**.
     */
    const SIZE_TOO_LARGE = "SIZE_TOO_LARGE";
    /**
     * The item is returned because the customer changed their mind. Displays as **Customer changed their mind**.
     */
    const UNWANTED = "UNWANTED";
    /**
     * The item is returned because it was not as described. Displays as **Item not as described**.
     */
    const NOT_AS_DESCRIBED = "NOT_AS_DESCRIBED";
    /**
     * The item is returned because the customer received the wrong one. Displays as **Received the wrong item**.
     */
    const WRONG_ITEM = "WRONG_ITEM";
    /**
     * The item is returned because it is damaged or defective. Displays as **Damaged or defective**.
     */
    const DEFECTIVE = "DEFECTIVE";
    /**
     * The item is returned because the buyer did not like the style. Displays as **Style**.
     */
    const STYLE = "STYLE";
    /**
     * The item is returned because the buyer did not like the color. Displays as **Color**.
     */
    const COLOR = "COLOR";
    /**
     * The item is returned for another reason. For this value, a return reason note is also provided. Displays as **Other**.
     */
    const OTHER = "OTHER";
    /**
     * The item is returned because of an unknown reason. Displays as **Unknown**.
     */
    const UNKNOWN = "UNKNOWN";
}
