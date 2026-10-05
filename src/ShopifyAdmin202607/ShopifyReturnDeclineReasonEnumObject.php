<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyReturnDeclineReasonEnumObject extends EnumObject
{
    const RETURN_PERIOD_ENDED = "RETURN_PERIOD_ENDED";
    const FINAL_SALE = "FINAL_SALE";
    const OTHER = "OTHER";
}
