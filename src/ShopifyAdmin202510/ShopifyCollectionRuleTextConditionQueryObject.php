<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionRuleTextConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleTextCondition";

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
