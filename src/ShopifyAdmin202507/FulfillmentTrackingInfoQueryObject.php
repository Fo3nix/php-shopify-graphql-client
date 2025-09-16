<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentTrackingInfoQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentTrackingInfo";

    public function selectCompany()
    {
        $this->selectField("company");

        return $this;
    }

    public function selectNumber()
    {
        $this->selectField("number");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
