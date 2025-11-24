<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionRuleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRule";

    public function selectColumn()
    {
        $this->selectField("column");

        return $this;
    }

    public function selectCondition()
    {
        $this->selectField("condition");

        return $this;
    }

    public function selectConditionObject(ShopifyCollectionRuleConditionObjectArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionRuleConditionObjectUnionObject("conditionObject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRelation()
    {
        $this->selectField("relation");

        return $this;
    }
}
