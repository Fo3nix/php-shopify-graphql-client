<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductTaxonomyNodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductTaxonomyNode";

    public function selectFullName()
    {
        $this->selectField("fullName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsLeaf()
    {
        $this->selectField("isLeaf");

        return $this;
    }

    public function selectIsRoot()
    {
        $this->selectField("isRoot");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
