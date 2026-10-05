<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAnalyticsTargetQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTarget";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCurrencyCode()
    {
        $this->selectField("currencyCode");

        return $this;
    }

    public function selectEndDate()
    {
        $this->selectField("endDate");

        return $this;
    }

    public function selectExpectedValue()
    {
        $this->selectField("expectedValue");

        return $this;
    }

    public function selectFilters()
    {
        $this->selectField("filters");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMetric()
    {
        $this->selectField("metric");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPresentmentExpectedValue(ShopifyAnalyticsTargetPresentmentExpectedValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("presentmentExpectedValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShopifyqlQuery()
    {
        $this->selectField("shopifyqlQuery");

        return $this;
    }

    public function selectStartDate()
    {
        $this->selectField("startDate");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
