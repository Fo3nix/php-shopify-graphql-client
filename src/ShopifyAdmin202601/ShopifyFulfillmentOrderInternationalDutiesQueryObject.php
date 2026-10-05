<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderInternationalDutiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderInternationalDuties";

    public function selectIncoterm()
    {
        $this->selectField("incoterm");

        return $this;
    }
}
