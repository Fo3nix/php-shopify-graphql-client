<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\EnumObject;

/**
 * The strategy used to convert the gift card's balance when it is redeemed in a currency other than the one it was issued in.
 */
class ShopifyGiftCardCrossCurrencyRedemptionStrategyEnumObject extends EnumObject
{
    /**
     * The gift card can only be redeemed in the currency it was issued in. It cannot be used for purchases in other currencies.
     */
    const NONE = "NONE";
    /**
     * The gift card is redeemed using the automatic or manual exchange rate configured in the market's currency setting when converting from shop currency. Only applicable for gift cards issued in the shop currency.
     */
    const MARKET_FX = "MARKET_FX";
    /**
     * The gift card is redeemed using standard spot exchange rates between the redemption currency and the gift card currency.
     */
    const SPOT_FX = "SPOT_FX";
}
