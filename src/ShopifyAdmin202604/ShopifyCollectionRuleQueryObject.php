<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents at rule that's used to assign products to a collection.
 */
class ShopifyCollectionRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRule";

    /**
     * The attribute that the rule focuses on. For example, `title` or `product_type`.
     */
    public function selectColumn(): static
    {
        $this->selectField("column");

        return $this;
    }

    /**
     * The value that the operator is applied to. For example, `Hats`.
     */
    public function selectCondition(): static
    {
        $this->selectField("condition");

        return $this;
    }

    /**
     * The value that the operator is applied to.
     */
    public function selectConditionObject(?ShopifyCollectionRuleConditionObjectArgumentsObject $argsObject = null): ShopifyCollectionRuleConditionObjectUnionObject
    {
        $object = new ShopifyCollectionRuleConditionObjectUnionObject("conditionObject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The type of operator that the rule is based on. For example, `equals`, `contains`, or `not_equals`.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }
}
