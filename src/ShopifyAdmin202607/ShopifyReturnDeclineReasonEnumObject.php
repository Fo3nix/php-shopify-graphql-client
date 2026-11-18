<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The reason why the merchant declined a customer's return request.
 */
class ShopifyReturnDeclineReasonEnumObject extends EnumObject
{
    /**
     * The return period has ended.
     */
    const RETURN_PERIOD_ENDED = "RETURN_PERIOD_ENDED";
    /**
     * The return contains final sale items.
     */
    const FINAL_SALE = "FINAL_SALE";
    /**
     * The return is declined for another reason.
     */
    const OTHER = "OTHER";
}
