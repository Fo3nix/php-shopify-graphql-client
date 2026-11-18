<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCollectionSourceInclusionConditionMetafieldHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionSourceInclusionConditionMetafield
     */
    public static function fromArray(array $data): ShopifyCollectionSourceInclusionConditionMetafield
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionSourceInclusionConditionMetafield: the data has no __typename, select it in the query');
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
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionSourceInclusionConditionMetafield: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionSourceInclusionConditionMetafield $object
     * @return array
     */
    public static function toArray(ShopifyCollectionSourceInclusionConditionMetafield $object): array
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
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionSourceInclusionConditionMetafield');
    }
}
