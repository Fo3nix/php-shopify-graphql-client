<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLineItemWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemWarning";

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
