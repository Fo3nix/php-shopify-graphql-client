<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCollectionRuleConditionsRuleObjectUnionObject extends UnionObject
{
    public function onShopifyCollectionRuleMetafieldCondition()
    {
        $object = new ShopifyCollectionRuleMetafieldConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
