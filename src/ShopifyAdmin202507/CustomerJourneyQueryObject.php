<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerJourneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerJourney";

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

    public function selectFirstVisit(CustomerJourneyFirstVisitArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitQueryObject("firstVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastVisit(CustomerJourneyLastVisitArgumentsObject $argsObject = null)
    {
        $object = new CustomerVisitQueryObject("lastVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
