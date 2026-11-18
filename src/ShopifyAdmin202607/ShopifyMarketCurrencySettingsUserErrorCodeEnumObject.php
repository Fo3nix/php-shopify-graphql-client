<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MarketCurrencySettingsUserError`.
 */
class ShopifyMarketCurrencySettingsUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The specified market wasn't found.
     */
    const MARKET_NOT_FOUND = "MARKET_NOT_FOUND";
    /**
     * The currency settings of the given market cannot be changed because the market manager has exclusive control of pricing.
     */
    const MANAGED_MARKET = "MANAGED_MARKET";
    /**
     * This action is restricted if unified markets is enabled.
     */
    const UNIFIED_MARKETS_ENABLED = "UNIFIED_MARKETS_ENABLED";
    /**
     * The shop's payment gateway does not support enabling more than one currency.
     */
    const MULTIPLE_CURRENCIES_NOT_SUPPORTED = "MULTIPLE_CURRENCIES_NOT_SUPPORTED";
    /**
     * Can't enable or disable local currencies on a single country market.
     */
    const NO_LOCAL_CURRENCIES_ON_SINGLE_COUNTRY_MARKET = "NO_LOCAL_CURRENCIES_ON_SINGLE_COUNTRY_MARKET";
    /**
     * The specified currency is not supported.
     */
    const UNSUPPORTED_CURRENCY = "UNSUPPORTED_CURRENCY";
    /**
     * The primary market must use the shop currency.
     */
    const PRIMARY_MARKET_USES_SHOP_CURRENCY = "PRIMARY_MARKET_USES_SHOP_CURRENCY";
    /**
     * Local currencies must be enabled when adaptive pricing is active.
     */
    const ADAPTIVE_PRICING_REQUIRES_LOCAL_CURRENCIES = "ADAPTIVE_PRICING_REQUIRES_LOCAL_CURRENCIES";
}
