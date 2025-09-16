<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class JobQueryObject extends QueryObject
{
    const OBJECT_NAME = "Job";

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
