<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A [`CustomerJourney`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerJourney) through the online store leading up to an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). Tracks session data, attribution sources, and the timeline from first visit to purchase conversion.
 *
 * The summary includes the customer's position in their order history, days between first visit and order creation, and details about their first and last sessions. Use the [`moments`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerJourneySummary#field-moments) connection to access the complete timeline of customer interactions before the purchase.
 */
class ShopifyCustomerJourneySummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerJourneySummary";

    /**
     * The position of the current order within the customer's order history. Test orders aren't included.
     */
    public function selectCustomerOrderIndex(): static
    {
        $this->selectField("customerOrderIndex");

        return $this;
    }

    /**
     * The number of days between the first session and the order creation date. The first session represents the first session since the last order, or the first session within the 30 day attribution window, if more than 30 days have passed since the last order.
     */
    public function selectDaysToConversion(): static
    {
        $this->selectField("daysToConversion");

        return $this;
    }

    /**
     * The customer's first session going into the shop.
     */
    public function selectFirstVisit(?ShopifyCustomerJourneySummaryFirstVisitArgumentsObject $argsObject = null): ShopifyCustomerVisitQueryObject
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
    public function selectLastVisit(?ShopifyCustomerJourneySummaryLastVisitArgumentsObject $argsObject = null): ShopifyCustomerVisitQueryObject
    {
        $object = new ShopifyCustomerVisitQueryObject("lastVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The events preceding a customer's order, such as shop sessions.
     */
    public function selectMoments(?ShopifyCustomerJourneySummaryMomentsArgumentsObject $argsObject = null): ShopifyCustomerMomentConnectionQueryObject
    {
        $object = new ShopifyCustomerMomentConnectionQueryObject("moments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of customer moments associated with this order. Returns null if the order is still in the process of being attributed.
     */
    public function selectMomentsCount(?ShopifyCustomerJourneySummaryMomentsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("momentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the attributed sessions for the order have been created yet.
     */
    public function selectReady(): static
    {
        $this->selectField("ready");

        return $this;
    }
}
