<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyDiscountContextHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
     */
    public static function fromArray(array $data): ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountContext: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountBuyerSelectionAll':
                return ShopifyDiscountBuyerSelectionAll::fromArray($data);
            case 'DiscountCustomerSegments':
                return ShopifyDiscountCustomerSegments::fromArray($data);
            case 'DiscountCustomers':
                return ShopifyDiscountCustomers::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountContext: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers $object
     * @return array
     */
    public static function toArray(ShopifyDiscountBuyerSelectionAll|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers $object): array
    {
        if ($object instanceof ShopifyDiscountBuyerSelectionAll) {
            return ['__typename' => 'DiscountBuyerSelectionAll'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCustomerSegments) {
            return ['__typename' => 'DiscountCustomerSegments'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCustomers) {
            return ['__typename' => 'DiscountCustomers'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountContext');
    }
}
