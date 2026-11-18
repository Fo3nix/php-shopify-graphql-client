<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a price-based condition of a delivery method definition.
 */
class ShopifyDeliveryPriceConditionInputInputObject extends InputObject
{
    protected $criteria;
    protected $operator;

    /**
     * The monetary value to compare the price of an order to.
     */
    public function setCriteria(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->criteria = $shopifyMoneyInputInputObject;

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
