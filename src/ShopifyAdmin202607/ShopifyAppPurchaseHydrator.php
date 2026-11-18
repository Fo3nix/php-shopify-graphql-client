<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyAppPurchaseHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyAppPurchase
     */
    public static function fromArray(array $data): ShopifyAppPurchase
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate AppPurchase: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AppPurchaseOneTime':
                return ShopifyAppPurchaseOneTime::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate AppPurchase: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyAppPurchase $object
     * @return array
     */
    public static function toArray(ShopifyAppPurchase $object): array
    {
        if ($object instanceof ShopifyAppPurchaseOneTime) {
            return ['__typename' => 'AppPurchaseOneTime'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of AppPurchase');
    }
}
