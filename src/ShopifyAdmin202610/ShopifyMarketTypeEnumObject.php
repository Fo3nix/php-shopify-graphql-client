<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The market types.
 */
class ShopifyMarketTypeEnumObject extends EnumObject
{
    /**
     * The market does not apply to any visitor.
     */
    const NONE = "NONE";
    /**
     * The market applies to the visitor based on region.
     */
    const REGION = "REGION";
    /**
     * The market applies to the visitor based on the location.
     */
    const LOCATION = "LOCATION";
    /**
     * The market applies to the visitor based on the company location.
     */
    const COMPANY_LOCATION = "COMPANY_LOCATION";
    /**
     * The market applies to the visitor based on the channel.
     */
    const CHANNEL = "CHANNEL";
}
