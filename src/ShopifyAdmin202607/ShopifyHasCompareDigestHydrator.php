<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyHasCompareDigestHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyHasCompareDigest
     */
    public static function fromArray(array $data): ShopifyHasCompareDigest
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate HasCompareDigest: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Metafield':
                return ShopifyMetafield::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate HasCompareDigest: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyHasCompareDigest $object
     * @return array
     */
    public static function toArray(ShopifyHasCompareDigest $object): array
    {
        if ($object instanceof ShopifyMetafield) {
            return ['__typename' => 'Metafield'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of HasCompareDigest');
    }
}
