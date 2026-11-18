<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a rule to associate with a collection.
 */
class ShopifyCollectionRuleInputInputObject extends InputObject
{
    const REQUIRED = ["column", "relation", "condition"];

    protected $column;
    protected $relation;
    protected $condition;
    protected $conditionObjectId;

    /**
     * The attribute that the rule focuses on. For example, `title` or `product_type`.
     */
    public function setColumn($shopifyCollectionRuleColumn): static
    {
        $this->column = new RawObject($shopifyCollectionRuleColumn);

        return $this;
    }

    /**
     * The type of operator that the rule is based on. For example, `equals`, `contains`, or `not_equals`.
     */
    public function setRelation($shopifyCollectionRuleRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionRuleRelation);

        return $this;
    }

    /**
     * The value that the operator is applied to. For example, `Hats`.
     */
    public function setCondition($condition): static
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * The object ID that points to additional attributes for the collection rule.
     * This is only required when using metafield definition rules.
     */
    public function setConditionObjectId($conditionObjectId): static
    {
        $this->conditionObjectId = $conditionObjectId;

        return $this;
    }
}
