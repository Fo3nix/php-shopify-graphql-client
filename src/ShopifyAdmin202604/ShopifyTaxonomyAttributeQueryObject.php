<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTaxonomyAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyAttribute";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
