<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating the condition of a delivery method definition.
 */
class ShopifyDeliveryUpdateConditionInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $criteria;
    protected $criteriaUnit;
    protected $field;
    protected $operator;

    /**
     * A globally-unique ID of the condition.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The value that will be used in comparison.
     */
    public function setCriteria($criteria): static
    {
        $this->criteria = $criteria;

        return $this;
    }

    /**
     * The unit associated with the value that will be used in comparison.
     */
    public function setCriteriaUnit($criteriaUnit): static
    {
        $this->criteriaUnit = $criteriaUnit;

        return $this;
    }

    /**
     * The property of an order that will be used in comparison.
     */
    public function setField($shopifyDeliveryConditionField): static
    {
        $this->field = new RawObject($shopifyDeliveryConditionField);

        return $this;
    }

    /**
     * The operator to use for comparison.
     */
    public function setOperator($shopifyDeliveryConditionOperator): static
    {
        $this->operator = new RawObject($shopifyDeliveryConditionOperator);

        return $this;
    }
}
