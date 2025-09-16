<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductDuplicateJobQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductDuplicateJob";

    public function selectDone()
    {
        $this->selectField("done");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
