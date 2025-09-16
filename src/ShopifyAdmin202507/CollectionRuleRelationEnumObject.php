<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\EnumObject;

class CollectionRuleRelationEnumObject extends EnumObject
{
    const CONTAINS = "CONTAINS";
    const ENDS_WITH = "ENDS_WITH";
    const EQUALS = "EQUALS";
    const GREATER_THAN = "GREATER_THAN";
    const IS_NOT_SET = "IS_NOT_SET";
    const IS_SET = "IS_SET";
    const LESS_THAN = "LESS_THAN";
    const NOT_CONTAINS = "NOT_CONTAINS";
    const NOT_EQUALS = "NOT_EQUALS";
    const STARTS_WITH = "STARTS_WITH";
}
