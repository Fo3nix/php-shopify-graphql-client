<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProductVariantsCountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProductVariantsCount";

    public function selectCapped()
    {
        $this->selectField("capped");

        return $this;
    }

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }
}
