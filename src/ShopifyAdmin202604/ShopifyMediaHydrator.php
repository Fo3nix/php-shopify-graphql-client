<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyMediaHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyMedia
     */
    public static function fromArray(array $data): ShopifyMedia
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Media: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'ExternalVideo':
                return ShopifyExternalVideo::fromArray($data);
            case 'MediaImage':
                return ShopifyMediaImage::fromArray($data);
            case 'Model3d':
                return ShopifyModel3d::fromArray($data);
            case 'Video':
                return ShopifyVideo::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Media: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyMedia $object
     * @return array
     */
    public static function toArray(ShopifyMedia $object): array
    {
        if ($object instanceof ShopifyExternalVideo) {
            return ['__typename' => 'ExternalVideo'] + $object->asArray();
        }
        if ($object instanceof ShopifyMediaImage) {
            return ['__typename' => 'MediaImage'] + $object->asArray();
        }
        if ($object instanceof ShopifyModel3d) {
            return ['__typename' => 'Model3d'] + $object->asArray();
        }
        if ($object instanceof ShopifyVideo) {
            return ['__typename' => 'Video'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Media');
    }
}
