<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * The status of a return.
 */
class ShopifyReturnStatusEnumObject extends EnumObject
{
    /**
     * The return has been canceled.
     */
    const CANCELED = "CANCELED";
    /**
     * The return has been completed.
     */
    const CLOSED = "CLOSED";
    /**
     * The return is in progress.
     */
    const OPEN = "OPEN";
    /**
     * The return was requested.
     */
    const REQUESTED = "REQUESTED";
    /**
     * The return was declined.
     */
    const DECLINED = "DECLINED";
}
