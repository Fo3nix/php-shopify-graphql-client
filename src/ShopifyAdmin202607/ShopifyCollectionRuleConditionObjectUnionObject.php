<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * Specifies object for the condition of the rule.
 */
class ShopifyCollectionRuleConditionObjectUnionObject extends UnionObject
{
    public function onShopifyCollectionRuleCategoryCondition(): ShopifyCollectionRuleCategoryConditionQueryObject
    {
        $object = new ShopifyCollectionRuleCategoryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollectionRuleMetafieldCondition(): ShopifyCollectionRuleMetafieldConditionQueryObject
    {
        $object = new ShopifyCollectionRuleMetafieldConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollectionRuleProductCategoryCondition(): ShopifyCollectionRuleProductCategoryConditionQueryObject
    {
        $object = new ShopifyCollectionRuleProductCategoryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollectionRuleTextCondition(): ShopifyCollectionRuleTextConditionQueryObject
    {
        $object = new ShopifyCollectionRuleTextConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
