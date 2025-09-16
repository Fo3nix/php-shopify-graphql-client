<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEvent";

    public function selectAddress1()
    {
        $this->selectField("address1");

        return $this;
    }

    public function selectCity()
    {
        $this->selectField("city");

        return $this;
    }

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectEstimatedDeliveryAt()
    {
        $this->selectField("estimatedDeliveryAt");

        return $this;
    }

    public function selectHappenedAt()
    {
        $this->selectField("happenedAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLatitude()
    {
        $this->selectField("latitude");

        return $this;
    }

    public function selectLongitude()
    {
        $this->selectField("longitude");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectProvince()
    {
        $this->selectField("province");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectZip()
    {
        $this->selectField("zip");

        return $this;
    }
}
