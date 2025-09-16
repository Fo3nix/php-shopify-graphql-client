<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CashTrackingSessionsSortKeysEnumObject extends EnumObject
{
    const CLOSING_TIME_ASC = "CLOSING_TIME_ASC";
    const CLOSING_TIME_DESC = "CLOSING_TIME_DESC";
    const ID = "ID";
    const OPENING_TIME_ASC = "OPENING_TIME_ASC";
    const OPENING_TIME_DESC = "OPENING_TIME_DESC";
    const TOTAL_DISCREPANCY_ASC = "TOTAL_DISCREPANCY_ASC";
    const TOTAL_DISCREPANCY_DESC = "TOTAL_DISCREPANCY_DESC";
}
