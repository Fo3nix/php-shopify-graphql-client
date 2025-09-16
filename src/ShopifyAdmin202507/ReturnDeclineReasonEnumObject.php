<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class ReturnDeclineReasonEnumObject extends EnumObject
{
    const RETURN_PERIOD_ENDED = "RETURN_PERIOD_ENDED";
    const FINAL_SALE = "FINAL_SALE";
    const OTHER = "OTHER";
}
