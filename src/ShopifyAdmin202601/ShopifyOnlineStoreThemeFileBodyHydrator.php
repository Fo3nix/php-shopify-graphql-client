<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyOnlineStoreThemeFileBodyHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyOnlineStoreThemeFileBodyBase64|ShopifyOnlineStoreThemeFileBodyText|ShopifyOnlineStoreThemeFileBodyUrl
     */
    public static function fromArray(array $data): ShopifyOnlineStoreThemeFileBodyBase64|ShopifyOnlineStoreThemeFileBodyText|ShopifyOnlineStoreThemeFileBodyUrl
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate OnlineStoreThemeFileBody: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'OnlineStoreThemeFileBodyBase64':
                return ShopifyOnlineStoreThemeFileBodyBase64::fromArray($data);
            case 'OnlineStoreThemeFileBodyText':
                return ShopifyOnlineStoreThemeFileBodyText::fromArray($data);
            case 'OnlineStoreThemeFileBodyUrl':
                return ShopifyOnlineStoreThemeFileBodyUrl::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate OnlineStoreThemeFileBody: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyOnlineStoreThemeFileBodyBase64|ShopifyOnlineStoreThemeFileBodyText|ShopifyOnlineStoreThemeFileBodyUrl $object
     * @return array
     */
    public static function toArray(ShopifyOnlineStoreThemeFileBodyBase64|ShopifyOnlineStoreThemeFileBodyText|ShopifyOnlineStoreThemeFileBodyUrl $object): array
    {
        if ($object instanceof ShopifyOnlineStoreThemeFileBodyBase64) {
            return ['__typename' => 'OnlineStoreThemeFileBodyBase64'] + $object->asArray();
        }
        if ($object instanceof ShopifyOnlineStoreThemeFileBodyText) {
            return ['__typename' => 'OnlineStoreThemeFileBodyText'] + $object->asArray();
        }
        if ($object instanceof ShopifyOnlineStoreThemeFileBodyUrl) {
            return ['__typename' => 'OnlineStoreThemeFileBodyUrl'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of OnlineStoreThemeFileBody');
    }
}
