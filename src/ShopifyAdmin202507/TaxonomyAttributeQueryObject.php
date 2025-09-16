<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyAttribute";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
