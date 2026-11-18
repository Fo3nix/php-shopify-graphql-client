<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\EnumObject;

/**
 * Days of the week from Monday to Sunday.
 */
class ShopifyDayOfTheWeekEnumObject extends EnumObject
{
    /**
     * Monday.
     */
    const MONDAY = "MONDAY";
    /**
     * Tuesday.
     */
    const TUESDAY = "TUESDAY";
    /**
     * Wednesday.
     */
    const WEDNESDAY = "WEDNESDAY";
    /**
     * Thursday.
     */
    const THURSDAY = "THURSDAY";
    /**
     * Friday.
     */
    const FRIDAY = "FRIDAY";
    /**
     * Saturday.
     */
    const SATURDAY = "SATURDAY";
    /**
     * Sunday.
     */
    const SUNDAY = "SUNDAY";
}
