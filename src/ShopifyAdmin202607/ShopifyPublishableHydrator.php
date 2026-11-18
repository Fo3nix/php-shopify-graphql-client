<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyPublishableHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyPublishable
     */
    public static function fromArray(array $data): ShopifyPublishable
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Publishable: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Collection':
                return ShopifyCollection::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Publishable: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyPublishable $object
     * @return array
     */
    public static function toArray(ShopifyPublishable $object): array
    {
        if ($object instanceof ShopifyCollection) {
            return ['__typename' => 'Collection'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Publishable');
    }
}
