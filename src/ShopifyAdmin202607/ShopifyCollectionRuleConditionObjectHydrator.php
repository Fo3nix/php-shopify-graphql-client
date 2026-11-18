<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCollectionRuleConditionObjectHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionRuleCategoryCondition|ShopifyCollectionRuleMetafieldCondition|ShopifyCollectionRuleProductCategoryCondition|ShopifyCollectionRuleTextCondition
     */
    public static function fromArray(array $data): ShopifyCollectionRuleCategoryCondition|ShopifyCollectionRuleMetafieldCondition|ShopifyCollectionRuleProductCategoryCondition|ShopifyCollectionRuleTextCondition
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionRuleConditionObject: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CollectionRuleCategoryCondition':
                return ShopifyCollectionRuleCategoryCondition::fromArray($data);
            case 'CollectionRuleMetafieldCondition':
                return ShopifyCollectionRuleMetafieldCondition::fromArray($data);
            case 'CollectionRuleProductCategoryCondition':
                return ShopifyCollectionRuleProductCategoryCondition::fromArray($data);
            case 'CollectionRuleTextCondition':
                return ShopifyCollectionRuleTextCondition::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionRuleConditionObject: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionRuleCategoryCondition|ShopifyCollectionRuleMetafieldCondition|ShopifyCollectionRuleProductCategoryCondition|ShopifyCollectionRuleTextCondition $object
     * @return array
     */
    public static function toArray(ShopifyCollectionRuleCategoryCondition|ShopifyCollectionRuleMetafieldCondition|ShopifyCollectionRuleProductCategoryCondition|ShopifyCollectionRuleTextCondition $object): array
    {
        if ($object instanceof ShopifyCollectionRuleCategoryCondition) {
            return ['__typename' => 'CollectionRuleCategoryCondition'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionRuleMetafieldCondition) {
            return ['__typename' => 'CollectionRuleMetafieldCondition'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionRuleProductCategoryCondition) {
            return ['__typename' => 'CollectionRuleProductCategoryCondition'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionRuleTextCondition) {
            return ['__typename' => 'CollectionRuleTextCondition'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionRuleConditionObject');
    }
}
