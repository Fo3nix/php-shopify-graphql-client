<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A selection of customers for whom the price rule applies.
 */
class ShopifyPriceRuleCustomerSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleCustomerSelection";

    /**
     * List of customers to whom the price rule applies.
     */
    public function selectCustomers(?ShopifyPriceRuleCustomerSelectionCustomersArgumentsObject $argsObject = null): ShopifyCustomerConnectionQueryObject
    {
        $object = new ShopifyCustomerConnectionQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the price rule applies to all customers.
     */
    public function selectForAllCustomers(): static
    {
        $this->selectField("forAllCustomers");

        return $this;
    }

    /**
     * A list of customer segments that contain the customers who can use the price rule.
     */
    public function selectSegments(?ShopifyPriceRuleCustomerSelectionSegmentsArgumentsObject $argsObject = null): ShopifySegmentQueryObject
    {
        $object = new ShopifySegmentQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
