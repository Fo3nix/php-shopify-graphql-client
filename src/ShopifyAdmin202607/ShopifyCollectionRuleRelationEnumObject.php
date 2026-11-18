<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * Specifies the relationship between the `column` and the `condition`.
 */
class ShopifyCollectionRuleRelationEnumObject extends EnumObject
{
    /**
     * The attribute contains the condition.
     */
    const CONTAINS = "CONTAINS";
    /**
     * The attribute ends with the condition.
     */
    const ENDS_WITH = "ENDS_WITH";
    /**
     * The attribute is equal to the condition.
     */
    const EQUALS = "EQUALS";
    /**
     * The attribute is greater than the condition.
     */
    const GREATER_THAN = "GREATER_THAN";
    /**
     * The attribute is not set (equal to `null`).
     */
    const IS_NOT_SET = "IS_NOT_SET";
    /**
     * The attribute is set (not equal to `null`).
     */
    const IS_SET = "IS_SET";
    /**
     * The attribute is less than the condition.
     */
    const LESS_THAN = "LESS_THAN";
    /**
     * The attribute does not contain the condition.
     */
    const NOT_CONTAINS = "NOT_CONTAINS";
    /**
     * The attribute does not equal the condition.
     */
    const NOT_EQUALS = "NOT_EQUALS";
    /**
     * The attribute starts with the condition.
     */
    const STARTS_WITH = "STARTS_WITH";
}
