<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCollectionSourceInclusionConditionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionSourceInclusionCondition
     */
    public static function fromArray(array $data): ShopifyCollectionSourceInclusionCondition
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionSourceInclusionCondition: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CollectionSourceInclusionConditionMetafieldBoolean':
                return ShopifyCollectionSourceInclusionConditionMetafieldBoolean::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldDecimal':
                return ShopifyCollectionSourceInclusionConditionMetafieldDecimal::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldInt':
                return ShopifyCollectionSourceInclusionConditionMetafieldInt::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldInteger':
                return ShopifyCollectionSourceInclusionConditionMetafieldInteger::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldMetaobject':
                return ShopifyCollectionSourceInclusionConditionMetafieldMetaobject::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldMetaobjectList':
                return ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectList::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldString':
                return ShopifyCollectionSourceInclusionConditionMetafieldString::fromArray($data);
            case 'CollectionSourceInclusionConditionMetafieldStringList':
                return ShopifyCollectionSourceInclusionConditionMetafieldStringList::fromArray($data);
            case 'CollectionSourceInclusionConditionProductCategory':
                return ShopifyCollectionSourceInclusionConditionProductCategory::fromArray($data);
            case 'CollectionSourceInclusionConditionProductStatus':
                return ShopifyCollectionSourceInclusionConditionProductStatus::fromArray($data);
            case 'CollectionSourceInclusionConditionProductTag':
                return ShopifyCollectionSourceInclusionConditionProductTag::fromArray($data);
            case 'CollectionSourceInclusionConditionProductTitle':
                return ShopifyCollectionSourceInclusionConditionProductTitle::fromArray($data);
            case 'CollectionSourceInclusionConditionProductType':
                return ShopifyCollectionSourceInclusionConditionProductType::fromArray($data);
            case 'CollectionSourceInclusionConditionProductVendor':
                return ShopifyCollectionSourceInclusionConditionProductVendor::fromArray($data);
            case 'CollectionSourceInclusionConditionUnknown':
                return ShopifyCollectionSourceInclusionConditionUnknown::fromArray($data);
            case 'CollectionSourceInclusionConditionVariantCompareAtPrice':
                return ShopifyCollectionSourceInclusionConditionVariantCompareAtPrice::fromArray($data);
            case 'CollectionSourceInclusionConditionVariantInventory':
                return ShopifyCollectionSourceInclusionConditionVariantInventory::fromArray($data);
            case 'CollectionSourceInclusionConditionVariantPrice':
                return ShopifyCollectionSourceInclusionConditionVariantPrice::fromArray($data);
            case 'CollectionSourceInclusionConditionVariantTitle':
                return ShopifyCollectionSourceInclusionConditionVariantTitle::fromArray($data);
            case 'CollectionSourceInclusionConditionVariantWeight':
                return ShopifyCollectionSourceInclusionConditionVariantWeight::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionSourceInclusionCondition: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionSourceInclusionCondition $object
     * @return array
     */
    public static function toArray(ShopifyCollectionSourceInclusionCondition $object): array
    {
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldBoolean) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldBoolean'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldDecimal) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldDecimal'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldInt) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldInt'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldInteger) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldInteger'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldMetaobject) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldMetaobject'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectList) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldMetaobjectList'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldString) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldString'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionMetafieldStringList) {
            return ['__typename' => 'CollectionSourceInclusionConditionMetafieldStringList'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionProductCategory) {
            return ['__typename' => 'CollectionSourceInclusionConditionProductCategory'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionProductStatus) {
            return ['__typename' => 'CollectionSourceInclusionConditionProductStatus'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionProductTag) {
            return ['__typename' => 'CollectionSourceInclusionConditionProductTag'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionProductTitle) {
            return ['__typename' => 'CollectionSourceInclusionConditionProductTitle'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionProductType) {
            return ['__typename' => 'CollectionSourceInclusionConditionProductType'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionProductVendor) {
            return ['__typename' => 'CollectionSourceInclusionConditionProductVendor'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionUnknown) {
            return ['__typename' => 'CollectionSourceInclusionConditionUnknown'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionVariantCompareAtPrice) {
            return ['__typename' => 'CollectionSourceInclusionConditionVariantCompareAtPrice'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionVariantInventory) {
            return ['__typename' => 'CollectionSourceInclusionConditionVariantInventory'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionVariantPrice) {
            return ['__typename' => 'CollectionSourceInclusionConditionVariantPrice'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionVariantTitle) {
            return ['__typename' => 'CollectionSourceInclusionConditionVariantTitle'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSourceInclusionConditionVariantWeight) {
            return ['__typename' => 'CollectionSourceInclusionConditionVariantWeight'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionSourceInclusionCondition');
    }
}
