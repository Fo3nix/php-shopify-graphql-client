<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyMobilePlatformApplicationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyAndroidApplication|ShopifyAppleApplication
     */
    public static function fromArray(array $data): ShopifyAndroidApplication|ShopifyAppleApplication
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate MobilePlatformApplication: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AndroidApplication':
                return ShopifyAndroidApplication::fromArray($data);
            case 'AppleApplication':
                return ShopifyAppleApplication::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate MobilePlatformApplication: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyAndroidApplication|ShopifyAppleApplication $object
     * @return array
     */
    public static function toArray(ShopifyAndroidApplication|ShopifyAppleApplication $object): array
    {
        if ($object instanceof ShopifyAndroidApplication) {
            return ['__typename' => 'AndroidApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppleApplication) {
            return ['__typename' => 'AppleApplication'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of MobilePlatformApplication');
    }
}
