<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `MarketUserError`.
 */
class ShopifyMarketUserErrorCodeEnumObject extends EnumObject
{
    /**
     * The input value is invalid.
     */
    const INVALID = "INVALID";
    /**
     * The input value is already taken.
     */
    const TAKEN = "TAKEN";
    /**
     * The input value is too long.
     */
    const TOO_LONG = "TOO_LONG";
    /**
     * The input value is too short.
     */
    const TOO_SHORT = "TOO_SHORT";
    /**
     * The input value is blank.
     */
    const BLANK = "BLANK";
    /**
     * The input value isn't included in the list.
     */
    const INCLUSION = "INCLUSION";
    /**
     * The market wasn't found.
     */
    const MARKET_NOT_FOUND = "MARKET_NOT_FOUND";
    /**
     * The market region wasn't found.
     */
    const REGION_NOT_FOUND = "REGION_NOT_FOUND";
    /**
     * The province doesn't exist.
     */
    const PROVINCE_DOES_NOT_EXIST = "PROVINCE_DOES_NOT_EXIST";
    /**
     * The market web presence wasn't found.
     */
    const WEB_PRESENCE_NOT_FOUND = "WEB_PRESENCE_NOT_FOUND";
    /**
     * Can't delete the only region in a market.
     */
    const CANNOT_DELETE_ONLY_REGION = "CANNOT_DELETE_ONLY_REGION";
    /**
     * Can't delete the primary market.
     */
    const CANNOT_DELETE_PRIMARY_MARKET = "CANNOT_DELETE_PRIMARY_MARKET";
    /**
     * Exceeds max multi-context markets.
     */
    const EXCEEDS_MAX_MULTI_CONTEXT_MARKETS = "EXCEEDS_MAX_MULTI_CONTEXT_MARKETS";
    /**
     * Domain was not found.
     */
    const DOMAIN_NOT_FOUND = "DOMAIN_NOT_FOUND";
    /**
     * The subfolder suffix must be at least 2 letters.
     */
    const SUBFOLDER_SUFFIX_MUST_BE_AT_LEAST_2_LETTERS = "SUBFOLDER_SUFFIX_MUST_BE_AT_LEAST_2_LETTERS";
    /**
     * The subfolder suffix is invalid, please provide a different value.
     */
    const SUBFOLDER_SUFFIX_CANNOT_BE_SCRIPT_CODE = "SUBFOLDER_SUFFIX_CANNOT_BE_SCRIPT_CODE";
    /**
     * No languages selected.
     */
    const NO_LANGUAGES = "NO_LANGUAGES";
    /**
     * Duplicates found in languages.
     */
    const DUPLICATE_LANGUAGES = "DUPLICATE_LANGUAGES";
    /**
     * Duplicate region market.
     */
    const DUPLICATE_REGION_MARKET = "DUPLICATE_REGION_MARKET";
    /**
     * Duplicate unique market.
     */
    const DUPLICATE_UNIQUE_MARKET = "DUPLICATE_UNIQUE_MARKET";
    /**
     * Cannot add region-specific language.
     */
    const REGION_SPECIFIC_LANGUAGE = "REGION_SPECIFIC_LANGUAGE";
    /**
     * Can't pass both `subfolderSuffix` and `domainId`.
     */
    const CANNOT_HAVE_SUBFOLDER_AND_DOMAIN = "CANNOT_HAVE_SUBFOLDER_AND_DOMAIN";
    /**
     * Can't add another web presence to the market.
     */
    const MARKET_REACHED_WEB_PRESENCE_LIMIT = "MARKET_REACHED_WEB_PRESENCE_LIMIT";
    /**
     * The country code is missing.
     */
    const MISSING_COUNTRY_CODE = "MISSING_COUNTRY_CODE";
    /**
     * The province code is missing.
     */
    const MISSING_PROVINCE_CODE = "MISSING_PROVINCE_CODE";
    /**
     * Can't have multiple subfolder web presences per market.
     */
    const CANNOT_HAVE_MULTIPLE_SUBFOLDERS_PER_MARKET = "CANNOT_HAVE_MULTIPLE_SUBFOLDERS_PER_MARKET";
    /**
     * Can't have both subfolder and domain web presences.
     */
    const CANNOT_HAVE_BOTH_SUBFOLDER_AND_DOMAIN_WEB_PRESENCES = "CANNOT_HAVE_BOTH_SUBFOLDER_AND_DOMAIN_WEB_PRESENCES";
    /**
     * One of `subfolderSuffix` or `domainId` is required.
     */
    const REQUIRES_DOMAIN_OR_SUBFOLDER = "REQUIRES_DOMAIN_OR_SUBFOLDER";
    /**
     * Can't disable the primary market.
     */
    const CANNOT_DISABLE_PRIMARY_MARKET = "CANNOT_DISABLE_PRIMARY_MARKET";
    /**
     * The language isn't published to the store.
     */
    const UNPUBLISHED_LANGUAGE = "UNPUBLISHED_LANGUAGE";
    /**
     * The language isn't enabled on the store.
     */
    const DISABLED_LANGUAGE = "DISABLED_LANGUAGE";
    /**
     * Can't set default locale to null.
     */
    const CANNOT_SET_DEFAULT_LOCALE_TO_NULL = "CANNOT_SET_DEFAULT_LOCALE_TO_NULL";
    /**
     * Can't add unsupported country or region.
     */
    const UNSUPPORTED_COUNTRY_REGION = "UNSUPPORTED_COUNTRY_REGION";
    /**
     * Can't add customer account domain to a market.
     */
    const CANNOT_ADD_CUSTOMER_DOMAIN = "CANNOT_ADD_CUSTOMER_DOMAIN";
    /**
     * An error occurred. See the message for details.
     */
    const GENERIC_ERROR = "GENERIC_ERROR";
    /**
     * Another modification to this market is in progress.
     */
    const MARKET_UPDATE_CONCURRENT_MODIFICATION = "MARKET_UPDATE_CONCURRENT_MODIFICATION";
    /**
     * Invalid combination of status and enabled.
     */
    const INVALID_STATUS_AND_ENABLED_COMBINATION = "INVALID_STATUS_AND_ENABLED_COMBINATION";
    /**
     * The province format is invalid.
     */
    const INVALID_PROVINCE_FORMAT = "INVALID_PROVINCE_FORMAT";
    /**
     * One or more condition IDs were not found.
     */
    const CONDITIONS_NOT_FOUND = "CONDITIONS_NOT_FOUND";
    /**
     * Specified conditions cannot be empty.
     */
    const SPECIFIED_CONDITIONS_CANNOT_BE_EMPTY = "SPECIFIED_CONDITIONS_CANNOT_BE_EMPTY";
    /**
     * One or more customizations were not found.
     */
    const CUSTOMIZATIONS_NOT_FOUND = "CUSTOMIZATIONS_NOT_FOUND";
    /**
     * Matching ALL or NONE isn't supported for this driver type.
     */
    const WILDCARD_NOT_SUPPORTED = "WILDCARD_NOT_SUPPORTED";
    /**
     * With an ID list in input, SPECIFIED is not needed.
     */
    const SPECIFIED_NOT_VALID_FOR_INPUT = "SPECIFIED_NOT_VALID_FOR_INPUT";
    /**
     * Web presences and condition types are not compatible with each other.
     */
    const WEB_PRESENCE_NOT_COMPATIBLE_WITH_CONDITION_TYPES = "WEB_PRESENCE_NOT_COMPATIBLE_WITH_CONDITION_TYPES";
    /**
     * Catalogs and condition types are not compatible with each other.
     */
    const CATALOG_NOT_COMPATIBLE_WITH_CONDITION_TYPES = "CATALOG_NOT_COMPATIBLE_WITH_CONDITION_TYPES";
    /**
     * A market can only have market catalogs.
     */
    const CATALOG_TYPE_NOT_SUPPORTED = "CATALOG_TYPE_NOT_SUPPORTED";
    /**
     * Inclusive pricing cannot be added to a market with the specified condition types.
     */
    const INCLUSIVE_PRICING_NOT_COMPATIBLE_WITH_CONDITION_TYPES = "INCLUSIVE_PRICING_NOT_COMPATIBLE_WITH_CONDITION_TYPES";
    /**
     * The specified conditions are not compatible with each other.
     */
    const INCOMPATIBLE_CONDITIONS = "INCOMPATIBLE_CONDITIONS";
    /**
     * The currency settings of the given market cannot be changed because the market manager has exclusive control of pricing.
     */
    const MANAGED_MARKET = "MANAGED_MARKET";
    /**
     * The shop's payment gateway does not support enabling more than one currency.
     */
    const MULTIPLE_CURRENCIES_NOT_SUPPORTED = "MULTIPLE_CURRENCIES_NOT_SUPPORTED";
    /**
     * The specified currency is not supported.
     */
    const UNSUPPORTED_CURRENCY = "UNSUPPORTED_CURRENCY";
    /**
     * The shop must have a web presence that uses the primary domain.
     */
    const SHOP_MUST_HAVE_PRIMARY_DOMAIN_WEB_PRESENCE = "SHOP_MUST_HAVE_PRIMARY_DOMAIN_WEB_PRESENCE";
    /**
     * Can’t delete, disable, or change the type of the last region market.
     */
    const MUST_HAVE_AT_LEAST_ONE_ACTIVE_REGION_MARKET = "MUST_HAVE_AT_LEAST_ONE_ACTIVE_REGION_MARKET";
    /**
     * The user doesn't have permission access to create or edit markets.
     */
    const USER_LACKS_PERMISSION = "USER_LACKS_PERMISSION";
    /**
     * Contains regions that cannot be managed.
     */
    const CONTAINS_REGIONS_THAT_CANNOT_BE_MANAGED = "CONTAINS_REGIONS_THAT_CANNOT_BE_MANAGED";
    /**
     * Can't add web presence to the another market.
     */
    const WEB_PRESENCE_REACHED_MARKETS_LIMIT = "WEB_PRESENCE_REACHED_MARKETS_LIMIT";
    /**
     * Catalog condition types must be the same for all conditions on a catalog.
     */
    const CATALOG_CONDITION_TYPES_MUST_BE_THE_SAME = "CATALOG_CONDITION_TYPES_MUST_BE_THE_SAME";
    /**
     * A direct connection catalog can't be attached to a market.
     */
    const MARKET_CANT_HAVE_DIRECT_CONNECTION_CATALOG = "MARKET_CANT_HAVE_DIRECT_CONNECTION_CATALOG";
    /**
     * Your shop is not entitled to activate markets of this type.
     */
    const NOT_ENTITLED_TO_ACTIVATE_MARKET = "NOT_ENTITLED_TO_ACTIVATE_MARKET";
    /**
     * B2B markets must be merchant managed.
     */
    const B2B_MARKET_MUST_BE_MERCHANT_MANAGED = "B2B_MARKET_MUST_BE_MERCHANT_MANAGED";
    /**
     * POS location markets must be merchant managed.
     */
    const POS_LOCATION_MARKET_MUST_BE_MERCHANT_MANAGED = "POS_LOCATION_MARKET_MUST_BE_MERCHANT_MANAGED";
    /**
     * Catalogs created by Managed Markets cannot be added to a market.
     */
    const MANAGED_MARKETS_CATALOG_NOT_ALLOWED = "MANAGED_MARKETS_CATALOG_NOT_ALLOWED";
    /**
     * Resources created by Managed Markets cannot be added to a market.
     */
    const MANAGED_MARKETS_RESOURCE_NOT_ALLOWED = "MANAGED_MARKETS_RESOURCE_NOT_ALLOWED";
    /**
     * Retail location currency must be local.
     */
    const RETAIL_LOCATION_CURRENCY_MUST_BE_LOCAL = "RETAIL_LOCATION_CURRENCY_MUST_BE_LOCAL";
    /**
     * A Managed Market must use currencies that correspond to all of its countries.
     */
    const MANAGED_MARKET_CURRENCY_MUST_MATCH_COUNTRY = "MANAGED_MARKET_CURRENCY_MUST_MATCH_COUNTRY";
    /**
     * Catalogs with volume pricing or quantity rules are not supported for the specified condition types.
     */
    const CATALOGS_WITH_VOLUME_PRICING_OR_QUANTITY_RULES_NOT_SUPPORTED = "CATALOGS_WITH_VOLUME_PRICING_OR_QUANTITY_RULES_NOT_SUPPORTED";
    /**
     * All retail locations in a market must be in the same country.
     */
    const MIXED_COUNTRY_LOCATIONS_NOT_ALLOWED = "MIXED_COUNTRY_LOCATIONS_NOT_ALLOWED";
    /**
     * Location match all is only valid with one non-match all region.
     */
    const LOCATION_MATCH_ALL_REQUIRES_ONE_SPECIFIC_REGION = "LOCATION_MATCH_ALL_REQUIRES_ONE_SPECIFIC_REGION";
    /**
     * A location's country does not match the region's country.
     */
    const LOCATION_REGION_COUNTRY_MISMATCH = "LOCATION_REGION_COUNTRY_MISMATCH";
    /**
     * Managing this catalog is not supported by your plan.
     */
    const UNPERMITTED_ENTITLEMENTS_MARKET_CATALOGS = "UNPERMITTED_ENTITLEMENTS_MARKET_CATALOGS";
    /**
     * Global-e pricing configurations can only be edited by Global-e.
     */
    const GLOBAL_E_PRICING_STRATEGY_NOT_PERMITTED = "GLOBAL_E_PRICING_STRATEGY_NOT_PERMITTED";
}
