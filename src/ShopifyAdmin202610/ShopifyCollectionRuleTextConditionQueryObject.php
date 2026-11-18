<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Specifies the condition for a text field.
 */
class ShopifyCollectionRuleTextConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleTextCondition";

    /**
     * The value of the condition.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
