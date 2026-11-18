<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyCustomerMomentHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCustomerMoment
     */
    public static function fromArray(array $data): ShopifyCustomerMoment
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CustomerMoment: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CustomerVisit':
                return ShopifyCustomerVisit::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CustomerMoment: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCustomerMoment $object
     * @return array
     */
    public static function toArray(ShopifyCustomerMoment $object): array
    {
        if ($object instanceof ShopifyCustomerVisit) {
            return ['__typename' => 'CustomerVisit'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CustomerMoment');
    }
}
