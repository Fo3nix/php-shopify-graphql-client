<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerJourneySummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerJourneySummary";

    public function selectCustomerOrderIndex()
    {
        $this->selectField("customerOrderIndex");

        return $this;
    }

    public function selectDaysToConversion()
    {
        $this->selectField("daysToConversion");

        return $this;
    }

    public function selectFirstVisit(ShopifyCustomerJourneySummaryFirstVisitArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitQueryObject("firstVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastVisit(ShopifyCustomerJourneySummaryLastVisitArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitQueryObject("lastVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMoments(ShopifyCustomerJourneySummaryMomentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMomentConnectionQueryObject("moments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMomentsCount(ShopifyCustomerJourneySummaryMomentsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("momentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReady()
    {
        $this->selectField("ready");

        return $this;
    }
}
