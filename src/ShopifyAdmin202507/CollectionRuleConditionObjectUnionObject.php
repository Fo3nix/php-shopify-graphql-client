<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class CollectionRuleConditionObjectUnionObject extends UnionObject
{
    public function onCollectionRuleCategoryCondition()
    {
        $object = new CollectionRuleCategoryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionRuleMetafieldCondition()
    {
        $object = new CollectionRuleMetafieldConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionRuleProductCategoryCondition()
    {
        $object = new CollectionRuleProductCategoryConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollectionRuleTextCondition()
    {
        $object = new CollectionRuleTextConditionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
