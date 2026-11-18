<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyDepositConfigurationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDepositPercentage
     */
    public static function fromArray(array $data): ShopifyDepositPercentage
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DepositConfiguration: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DepositPercentage':
                return ShopifyDepositPercentage::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DepositConfiguration: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDepositPercentage $object
     * @return array
     */
    public static function toArray(ShopifyDepositPercentage $object): array
    {
        if ($object instanceof ShopifyDepositPercentage) {
            return ['__typename' => 'DepositPercentage'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DepositConfiguration');
    }
}
