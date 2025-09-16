<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleTextConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleTextCondition";

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
