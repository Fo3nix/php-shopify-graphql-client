<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class DeliveryLocalPickupTimeEnumObject extends EnumObject
{
    const ONE_HOUR = "ONE_HOUR";
    const TWO_HOURS = "TWO_HOURS";
    const FOUR_HOURS = "FOUR_HOURS";
    const TWENTY_FOUR_HOURS = "TWENTY_FOUR_HOURS";
    const TWO_TO_FOUR_DAYS = "TWO_TO_FOUR_DAYS";
    const FIVE_OR_MORE_DAYS = "FIVE_OR_MORE_DAYS";
}
