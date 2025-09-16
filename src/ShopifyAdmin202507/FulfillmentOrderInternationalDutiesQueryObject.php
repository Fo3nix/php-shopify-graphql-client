<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderInternationalDutiesQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderInternationalDuties";

    public function selectIncoterm()
    {
        $this->selectField("incoterm");

        return $this;
    }
}
