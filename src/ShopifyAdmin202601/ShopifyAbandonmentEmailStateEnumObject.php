<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the email state.
 */
class ShopifyAbandonmentEmailStateEnumObject extends EnumObject
{
    /**
     * The email has not yet been sent.
     */
    const NOT_SENT = "NOT_SENT";
    /**
     * The email has been sent.
     */
    const SENT = "SENT";
    /**
     * The email has been scheduled for later delivery.
     */
    const SCHEDULED = "SCHEDULED";
}
