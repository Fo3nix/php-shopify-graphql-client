<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResolvedPriceInclusivityQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResolvedPriceInclusivity";

    public function selectDutiesIncluded()
    {
        $this->selectField("dutiesIncluded");

        return $this;
    }

    public function selectTaxesIncluded()
    {
        $this->selectField("taxesIncluded");

        return $this;
    }
}
