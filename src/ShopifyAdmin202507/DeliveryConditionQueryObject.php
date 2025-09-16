<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCondition";

    public function selectConditionCriteria(DeliveryConditionConditionCriteriaArgumentsObject $argsObject = null)
    {
        $object = new DeliveryConditionCriteriaUnionObject("conditionCriteria");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectField()
    {
        $this->selectField("field");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOperator()
    {
        $this->selectField("operator");

        return $this;
    }
}
