<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\UnionObject;

/**
 * Specifies object with additional rule attributes.
 */
class ShopifyCollectionRuleConditionsRuleObjectUnionObject extends UnionObject
{
    public function onShopifyCollectionRuleMetafieldCondition(): ShopifyCollectionRuleMetafieldConditionQueryObject
    {
        $object = new ShopifyCollectionRuleMetafieldConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
