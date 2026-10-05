<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ComponentizedProductsBundleConsolidatedOptionSelectionComponent";

    public function selectOptionId()
    {
        $this->selectField("optionId");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
