<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a weight-based condition of a delivery method definition.
 */
class ShopifyDeliveryWeightConditionInputInputObject extends InputObject
{
    protected $criteria;
    protected $operator;

    /**
     * The weight value to compare the weight of an order to.
     */
    public function setCriteria(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->criteria = $shopifyWeightInputInputObject;

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
