<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCalculatedReturnFeeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCalculatedReturnFee
     */
    public static function fromArray(array $data): ShopifyCalculatedReturnFee
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CalculatedReturnFee: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CalculatedRestockingFee':
                return ShopifyCalculatedRestockingFee::fromArray($data);
            case 'CalculatedReturnShippingFee':
                return ShopifyCalculatedReturnShippingFee::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CalculatedReturnFee: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCalculatedReturnFee $object
     * @return array
     */
    public static function toArray(ShopifyCalculatedReturnFee $object): array
    {
        if ($object instanceof ShopifyCalculatedRestockingFee) {
            return ['__typename' => 'CalculatedRestockingFee'] + $object->asArray();
        }
        if ($object instanceof ShopifyCalculatedReturnShippingFee) {
            return ['__typename' => 'CalculatedReturnShippingFee'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CalculatedReturnFee');
    }
}
