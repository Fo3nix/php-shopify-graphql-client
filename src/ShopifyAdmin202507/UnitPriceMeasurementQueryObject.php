<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UnitPriceMeasurementQueryObject extends QueryObject
{
    const OBJECT_NAME = "UnitPriceMeasurement";

    public function selectMeasuredType()
    {
        $this->selectField("measuredType");

        return $this;
    }

    public function selectQuantityUnit()
    {
        $this->selectField("quantityUnit");

        return $this;
    }

    public function selectQuantityValue()
    {
        $this->selectField("quantityValue");

        return $this;
    }

    public function selectReferenceUnit()
    {
        $this->selectField("referenceUnit");

        return $this;
    }

    public function selectReferenceValue()
    {
        $this->selectField("referenceValue");

        return $this;
    }
}
