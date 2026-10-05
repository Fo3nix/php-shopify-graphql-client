<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCartTransformEligibleOperationsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CartTransformEligibleOperations";

    public function selectExpandOperation()
    {
        $this->selectField("expandOperation");

        return $this;
    }

    public function selectMergeOperation()
    {
        $this->selectField("mergeOperation");

        return $this;
    }

    public function selectUpdateOperation()
    {
        $this->selectField("updateOperation");

        return $this;
    }
}
