<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks a customer's path to purchase through their online store visits. The journey captures key moments like shop sessions that led to the order, helping merchants understand customer behavior and marketing attribution within a 30-day window. Includes the first and last sessions before an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), the time between initial visit and conversion, and the customer's order position in their purchase history.
 */
class ShopifyCustomerJourneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerJourney";

    /**
     * The position of the current order within the customer's order history.
     */
    public function selectCustomerOrderIndex(): static
    {
        $this->selectField("customerOrderIndex");

        return $this;
    }

    /**
     * The amount of days between first session and order creation date. First session represents first session since the last order, or first session within the 30 day attribution window, if more than 30 days has passed since the last order.
     */
    public function selectDaysToConversion(): static
    {
        $this->selectField("daysToConversion");

        return $this;
    }

    /**
     * The customer's first session going into the shop.
     */
    public function selectFirstVisit(?ShopifyCustomerJourneyFirstVisitArgumentsObject $argsObject = null): ShopifyCustomerVisitQueryObject
    {
        $object = new ShopifyCustomerVisitQueryObject("firstVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The last session before an order is made.
     */
    public function selectLastVisit(?ShopifyCustomerJourneyLastVisitArgumentsObject $argsObject = null): ShopifyCustomerVisitQueryObject
    {
        $object = new ShopifyCustomerVisitQueryObject("lastVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Events preceding a customer order, such as shop sessions.
     */
    public function selectMoments(?ShopifyCustomerJourneyMomentsArgumentsObject $argsObject = null): ShopifyCustomerMomentInterfaceObject
    {
        $object = new ShopifyCustomerMomentInterfaceObject("moments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
