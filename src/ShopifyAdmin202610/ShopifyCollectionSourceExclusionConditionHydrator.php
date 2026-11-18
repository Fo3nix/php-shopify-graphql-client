<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCollectionSourceExclusionConditionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionSourceExclusionCondition
     */
    public static function fromArray(array $data): ShopifyCollectionSourceExclusionCondition
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionSourceExclusionCondition: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CollectionSourceExclusionConditionCollection':
                return ShopifyCollectionSourceExclusionConditionCollection::fromArray($data);
            case 'CollectionSourceExclusionConditionProductCategory':
                return ShopifyCollectionSourceExclusionConditionProductCategory::fromArray($data);
            case 'CollectionSourceExclusionConditionProductTag':
                return ShopifyCollectionSourceExclusionConditionProductTag::fromArray($data);
            case 'CollectionSourceExclusionConditionProductType':
                return ShopifyCollectionSourceExclusionConditionProductType::fromArray($data);
            case 'CollectionSourceExclusionConditionProductVendor':
                return ShopifyCollectionSourceExclusionConditionProductVendor::fromArray($data);
            case 'CollectionSourceExclusionConditionUnknown':
                return ShopifyCollectionSourceExclusionConditionUnknown::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionSourceExclusionCondition: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionSourceExclusionCondition $object
     * @return array
     */
    public static function toArray(ShopifyCollectionSourceExclusionCondition $object): array
    {
        if ($object instanceof ShopifyCollectionSourceExclusionConditionCollection) {
            return ['__typename' => 'CollectionSourceExclusionConditionCollection'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceExclusionConditionProductCategory) {
            return ['__typename' => 'CollectionSourceExclusionConditionProductCategory'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceExclusionConditionProductTag) {
            return ['__typename' => 'CollectionSourceExclusionConditionProductTag'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceExclusionConditionProductType) {
            return ['__typename' => 'CollectionSourceExclusionConditionProductType'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceExclusionConditionProductVendor) {
            return ['__typename' => 'CollectionSourceExclusionConditionProductVendor'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceExclusionConditionUnknown) {
            return ['__typename' => 'CollectionSourceExclusionConditionUnknown'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionSourceExclusionCondition');
    }
}
