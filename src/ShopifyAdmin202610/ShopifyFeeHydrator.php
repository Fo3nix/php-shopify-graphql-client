<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyFeeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyFee
     */
    public static function fromArray(array $data): ShopifyFee
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Fee: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'RestockingFee':
                return ShopifyRestockingFee::fromArray($data);
            case 'ReturnShippingFee':
                return ShopifyReturnShippingFee::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Fee: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyFee $object
     * @return array
     */
    public static function toArray(ShopifyFee $object): array
    {
        if ($object instanceof ShopifyRestockingFee) {
            return ['__typename' => 'RestockingFee'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturnShippingFee) {
            return ['__typename' => 'ReturnShippingFee'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Fee');
    }
}
