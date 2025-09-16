<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class Vector3QueryObject extends QueryObject
{
    const OBJECT_NAME = "Vector3";

    public function selectX()
    {
        $this->selectField("x");

        return $this;
    }

    public function selectY()
    {
        $this->selectField("y");

        return $this;
    }

    public function selectZ()
    {
        $this->selectField("z");

        return $this;
    }
}
