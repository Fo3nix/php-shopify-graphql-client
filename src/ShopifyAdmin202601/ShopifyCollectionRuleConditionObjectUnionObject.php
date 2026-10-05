<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

class ShopifyCollectionRuleConditionObjectUnionObject extends UnionObject
{
    public function onShopifyCollectionRuleCategoryCondition()
    {
        $object = new ShopifyCollectionRuleCategoryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollectionRuleMetafieldCondition()
    {
        $object = new ShopifyCollectionRuleMetafieldConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollectionRuleProductCategoryCondition()
    {
        $object = new ShopifyCollectionRuleProductCategoryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollectionRuleTextCondition()
    {
        $object = new ShopifyCollectionRuleTextConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
