<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class CollectionRuleConditionsRuleObjectUnionObject extends UnionObject
{
    public function onCollectionRuleMetafieldCondition()
    {
        $object = new CollectionRuleMetafieldConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
