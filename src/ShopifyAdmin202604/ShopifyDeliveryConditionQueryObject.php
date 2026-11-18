<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition that must pass for a delivery method definition to be applied to an order.
 */
class ShopifyDeliveryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCondition";

    /**
     * The value (weight or price) that the condition field is compared to.
     */
    public function selectConditionCriteria(?ShopifyDeliveryConditionConditionCriteriaArgumentsObject $argsObject = null): ShopifyDeliveryConditionCriteriaUnionObject
    {
        $object = new ShopifyDeliveryConditionCriteriaUnionObject("conditionCriteria");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The field to compare the criterion value against, using the operator.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The operator to compare the field and criterion value.
     */
    public function selectOperator(): static
    {
        $this->selectField("operator");

        return $this;
    }
}
