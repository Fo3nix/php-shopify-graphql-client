<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The set of valid sort keys for the CashTrackingSessions query.
 */
class ShopifyCashTrackingSessionsSortKeysEnumObject extends EnumObject
{
    /**
     * Sort by the `closing_time_asc` value.
     */
    const CLOSING_TIME_ASC = "CLOSING_TIME_ASC";
    /**
     * Sort by the `closing_time_desc` value.
     */
    const CLOSING_TIME_DESC = "CLOSING_TIME_DESC";
    /**
     * Sort by the `created_at` value.
     */
    const CREATED_AT = "CREATED_AT";
    /**
     * Sort by the `id` value.
     */
    const ID = "ID";
    /**
     * Sort by the `opening_time_asc` value.
     */
    const OPENING_TIME_ASC = "OPENING_TIME_ASC";
    /**
     * Sort by the `opening_time_desc` value.
     */
    const OPENING_TIME_DESC = "OPENING_TIME_DESC";
    /**
     * Sort by the `total_discrepancy_asc` value.
     */
    const TOTAL_DISCREPANCY_ASC = "TOTAL_DISCREPANCY_ASC";
    /**
     * Sort by the `total_discrepancy_desc` value.
     */
    const TOTAL_DISCREPANCY_DESC = "TOTAL_DISCREPANCY_DESC";
}
