<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResolvedPriceInclusivityQueryObject extends QueryObject
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
