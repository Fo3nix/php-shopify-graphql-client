<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

class ShopifyGiftCardCrossCurrencyRedemptionStrategyEnumObject extends EnumObject
{
    const NONE = "NONE";
    const MARKET_FX = "MARKET_FX";
    const SPOT_FX = "SPOT_FX";
}
