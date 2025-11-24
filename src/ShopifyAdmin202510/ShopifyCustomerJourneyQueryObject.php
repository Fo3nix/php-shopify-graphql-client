<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerJourneyQueryObject extends QueryObject
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

    public function selectFirstVisit(ShopifyCustomerJourneyFirstVisitArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitQueryObject("firstVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLastVisit(ShopifyCustomerJourneyLastVisitArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitQueryObject("lastVisit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
