<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerJourneySummaryQueryObject extends QueryObject
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

    public function selectFirstVisit(CustomerJourneySummaryFirstVisitArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitQueryObject("firstVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastVisit(CustomerJourneySummaryLastVisitArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitQueryObject("lastVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMoments(CustomerJourneySummaryMomentsArgumentsObject $argsObject = null)
    {
        $object = new CustomerMomentConnectionQueryObject("moments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMomentsCount(CustomerJourneySummaryMomentsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("momentsCount");
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
