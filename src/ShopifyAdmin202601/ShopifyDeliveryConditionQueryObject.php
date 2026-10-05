<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCondition";

    public function selectConditionCriteria(ShopifyDeliveryConditionConditionCriteriaArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryConditionCriteriaUnionObject("conditionCriteria");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectField_()
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
