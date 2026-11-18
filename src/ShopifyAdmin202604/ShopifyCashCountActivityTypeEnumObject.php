<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The type of count activity.
 */
class ShopifyCashCountActivityTypeEnumObject extends EnumObject
{
    /**
     * A count performed at the opening of a session.
     */
    const OPENING = "OPENING";
    /**
     * A count performed at the closing of a session.
     */
    const CLOSING = "CLOSING";
    /**
     * A count performed during a session.
     */
    const MID_SESSION = "MID_SESSION";
}
