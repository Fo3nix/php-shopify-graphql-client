<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCollectionSourceHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionSource
     */
    public static function fromArray(array $data): ShopifyCollectionSource
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionSource: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CollectionConditionsSource':
                return ShopifyCollectionConditionsSource::fromArray($data);
            case 'CollectionSubCollectionsSource':
                return ShopifyCollectionSubCollectionsSource::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionSource: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionSource $object
     * @return array
     */
    public static function toArray(ShopifyCollectionSource $object): array
    {
        if ($object instanceof ShopifyCollectionConditionsSource) {
            return ['__typename' => 'CollectionConditionsSource'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionSubCollectionsSource) {
            return ['__typename' => 'CollectionSubCollectionsSource'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionSource');
    }
}
