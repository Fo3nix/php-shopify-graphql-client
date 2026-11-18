<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyDeliveryRateHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDeliveryRate
     */
    public static function fromArray(array $data): ShopifyDeliveryRate
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DeliveryRate: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DeliveryFlatRate':
                return ShopifyDeliveryFlatRate::fromArray($data);
            case 'DeliveryValueBasedRate':
                return ShopifyDeliveryValueBasedRate::fromArray($data);
            case 'DeliveryWeightBasedRate':
                return ShopifyDeliveryWeightBasedRate::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DeliveryRate: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDeliveryRate $object
     * @return array
     */
    public static function toArray(ShopifyDeliveryRate $object): array
    {
        if ($object instanceof ShopifyDeliveryFlatRate) {
            return ['__typename' => 'DeliveryFlatRate'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryValueBasedRate) {
            return ['__typename' => 'DeliveryValueBasedRate'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryWeightBasedRate) {
            return ['__typename' => 'DeliveryWeightBasedRate'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DeliveryRate');
    }
}
