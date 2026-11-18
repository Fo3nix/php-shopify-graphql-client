<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * Possible error codes that can be returned by `CatalogUserError`.
 */
class ShopifyCatalogUserErrorCodeEnumObject extends EnumObject
{
    /**
     * An app catalog cannot be assigned to a price list.
     */
    const APP_CATALOG_PRICE_LIST_ASSIGNMENT = "APP_CATALOG_PRICE_LIST_ASSIGNMENT";
    /**
     * Catalog failed to save.
     */
    const CATALOG_FAILED_TO_SAVE = "CATALOG_FAILED_TO_SAVE";
    /**
     * The catalog wasn't found.
     */
    const CATALOG_NOT_FOUND = "CATALOG_NOT_FOUND";
    /**
     * A price list cannot be assigned to the primary market.
     */
    const PRICE_LIST_NOT_ALLOWED_FOR_PRIMARY_MARKET = "PRICE_LIST_NOT_ALLOWED_FOR_PRIMARY_MARKET";
    /**
     * Quantity rules can be associated only with company location catalogs or catalogs associated with compatible markets.
     */
    const CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_RULES = "CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_RULES";
    /**
     * Quantity price breaks can be associated only with company location catalogs or catalogs associated with compatible markets.
     */
    const CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_PRICE_BREAKS = "CATALOG_CONTEXT_DOES_NOT_SUPPORT_QUANTITY_PRICE_BREAKS";
    /**
     * The catalog can't be associated with more than one market.
     */
    const CANNOT_ADD_MORE_THAN_ONE_MARKET = "CANNOT_ADD_MORE_THAN_ONE_MARKET";
    /**
     * A company location catalog outside of a supported plan can only have an archived status.
     */
    const COMPANY_LOCATION_CATALOG_STATUS_PLAN = "COMPANY_LOCATION_CATALOG_STATUS_PLAN";
    /**
     * Context driver already assigned to this catalog.
     */
    const CONTEXT_ALREADY_ASSIGNED_TO_CATALOG = "CONTEXT_ALREADY_ASSIGNED_TO_CATALOG";
    /**
     * Cannot save the catalog because the catalog limit for the context was reached.
     */
    const CONTEXT_CATALOG_LIMIT_REACHED = "CONTEXT_CATALOG_LIMIT_REACHED";
    /**
     * The company location could not be found.
     */
    const COMPANY_LOCATION_NOT_FOUND = "COMPANY_LOCATION_NOT_FOUND";
    /**
     * The arguments `contextsToAdd` and `contextsToRemove` must match existing catalog context type.
     */
    const CONTEXT_DRIVER_MISMATCH = "CONTEXT_DRIVER_MISMATCH";
    /**
     * A country catalog cannot be assigned to a price list.
     */
    const COUNTRY_CATALOG_PRICE_LIST_ASSIGNMENT = "COUNTRY_CATALOG_PRICE_LIST_ASSIGNMENT";
    /**
     * A country price list cannot be assigned to a catalog.
     */
    const COUNTRY_PRICE_LIST_ASSIGNMENT = "COUNTRY_PRICE_LIST_ASSIGNMENT";
    /**
     * The catalog context type is invalid.
     */
    const INVALID_CATALOG_CONTEXT_TYPE = "INVALID_CATALOG_CONTEXT_TYPE";
    /**
     * A market catalog must have an active status.
     */
    const MARKET_CATALOG_STATUS = "MARKET_CATALOG_STATUS";
    /**
     * Market not found.
     */
    const MARKET_NOT_FOUND = "MARKET_NOT_FOUND";
    /**
     * The catalog's market and price list currencies do not match.
     */
    const MARKET_AND_PRICE_LIST_CURRENCY_MISMATCH = "MARKET_AND_PRICE_LIST_CURRENCY_MISMATCH";
    /**
     * Market already belongs to another catalog.
     */
    const MARKET_TAKEN = "MARKET_TAKEN";
    /**
     * The managed country belongs to another catalog.
     */
    const MANAGED_COUNTRY_BELONGS_TO_ANOTHER_CATALOG = "MANAGED_COUNTRY_BELONGS_TO_ANOTHER_CATALOG";
    /**
     * Must provide exactly one context type.
     */
    const MUST_PROVIDE_EXACTLY_ONE_CONTEXT_TYPE = "MUST_PROVIDE_EXACTLY_ONE_CONTEXT_TYPE";
    /**
     * Price list failed to save.
     */
    const PRICE_LIST_FAILED_TO_SAVE = "PRICE_LIST_FAILED_TO_SAVE";
    /**
     * Price list not found.
     */
    const PRICE_LIST_NOT_FOUND = "PRICE_LIST_NOT_FOUND";
    /**
     * The price list is currently being modified. Please try again later.
     */
    const PRICE_LIST_LOCKED = "PRICE_LIST_LOCKED";
    /**
     * The catalog context is currently being modified. Please try again later.
     */
    const CATALOG_CONTEXT_LOCKED = "CATALOG_CONTEXT_LOCKED";
    /**
     * Publication not found.
     */
    const PUBLICATION_NOT_FOUND = "PUBLICATION_NOT_FOUND";
    /**
     * Must have `contexts_to_add` or `contexts_to_remove` argument.
     */
    const REQUIRES_CONTEXTS_TO_ADD_OR_REMOVE = "REQUIRES_CONTEXTS_TO_ADD_OR_REMOVE";
    /**
     * Can't perform this action on a catalog of this type.
     */
    const UNSUPPORTED_CATALOG_ACTION = "UNSUPPORTED_CATALOG_ACTION";
    /**
     * Cannot create a catalog for an app.
     */
    const CANNOT_CREATE_APP_CATALOG = "CANNOT_CREATE_APP_CATALOG";
    /**
     * Cannot modify a catalog for an app.
     */
    const CANNOT_MODIFY_APP_CATALOG = "CANNOT_MODIFY_APP_CATALOG";
    /**
     * Cannot delete a catalog for an app.
     */
    const CANNOT_DELETE_APP_CATALOG = "CANNOT_DELETE_APP_CATALOG";
    /**
     * Cannot create a catalog for a market.
     */
    const CANNOT_CREATE_MARKET_CATALOG = "CANNOT_CREATE_MARKET_CATALOG";
    /**
     * Cannot modify a catalog for a market.
     */
    const CANNOT_MODIFY_MARKET_CATALOG = "CANNOT_MODIFY_MARKET_CATALOG";
    /**
     * Cannot delete a catalog for a market.
     */
    const CANNOT_DELETE_MARKET_CATALOG = "CANNOT_DELETE_MARKET_CATALOG";
    /**
     * Managing this catalog is not supported by your plan.
     */
    const UNPERMITTED_ENTITLEMENTS_MARKET_CATALOGS = "UNPERMITTED_ENTITLEMENTS_MARKET_CATALOGS";
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
     * Cannot change context to specified type.
     */
    const INVALID_CONTEXT_CHANGE = "INVALID_CONTEXT_CHANGE";
}
