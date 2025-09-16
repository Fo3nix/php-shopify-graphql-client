<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleQueryObject extends QueryObject
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

    public function selectConditionObject(CollectionRuleConditionObjectArgumentsObject $argsObject = null)
    {
        $object = new CollectionRuleConditionObjectUnionObject("conditionObject");
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
