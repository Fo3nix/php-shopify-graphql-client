<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLineItemWarningQueryObject extends QueryObject
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
