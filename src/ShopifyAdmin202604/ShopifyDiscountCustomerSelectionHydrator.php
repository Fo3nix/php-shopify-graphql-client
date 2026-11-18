<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyDiscountCustomerSelectionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
     */
    public static function fromArray(array $data): ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountCustomerSelection: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountCustomerAll':
                return ShopifyDiscountCustomerAll::fromArray($data);
            case 'DiscountCustomerSegments':
                return ShopifyDiscountCustomerSegments::fromArray($data);
            case 'DiscountCustomers':
                return ShopifyDiscountCustomers::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountCustomerSelection: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers $object
     * @return array
     */
    public static function toArray(ShopifyDiscountCustomerAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers $object): array
    {
        if ($object instanceof ShopifyDiscountCustomerAll) {
            return ['__typename' => 'DiscountCustomerAll'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCustomerSegments) {
            return ['__typename' => 'DiscountCustomerSegments'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCustomers) {
            return ['__typename' => 'DiscountCustomers'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountCustomerSelection');
    }
}
