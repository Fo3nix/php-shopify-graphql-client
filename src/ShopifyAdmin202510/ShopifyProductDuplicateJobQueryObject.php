<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductDuplicateJobQueryObject extends QueryObject
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
