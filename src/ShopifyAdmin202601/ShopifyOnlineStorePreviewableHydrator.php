<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyOnlineStorePreviewableHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyOnlineStorePreviewable
     */
    public static function fromArray(array $data): ShopifyOnlineStorePreviewable
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate OnlineStorePreviewable: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Product':
                return ShopifyProduct::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate OnlineStorePreviewable: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyOnlineStorePreviewable $object
     * @return array
     */
    public static function toArray(ShopifyOnlineStorePreviewable $object): array
    {
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of OnlineStorePreviewable');
    }
}
