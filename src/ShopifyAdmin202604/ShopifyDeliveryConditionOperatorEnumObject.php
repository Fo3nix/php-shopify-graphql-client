<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\EnumObject;

/**
 * The operator to use to determine if the condition passes.
 */
class ShopifyDeliveryConditionOperatorEnumObject extends EnumObject
{
    /**
     * The condition will check whether the field is greater than or equal to the criterion.
     */
    const GREATER_THAN_OR_EQUAL_TO = "GREATER_THAN_OR_EQUAL_TO";
    /**
     * The condition will check if the field is less than or equal to the criterion.
     */
    const LESS_THAN_OR_EQUAL_TO = "LESS_THAN_OR_EQUAL_TO";
}
