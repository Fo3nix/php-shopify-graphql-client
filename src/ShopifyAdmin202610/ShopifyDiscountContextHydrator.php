<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyDiscountContextHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountBuyerSelectionAll|ShopifyDiscountContextUnknown|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|ShopifyDiscountMarkets
     */
    public static function fromArray(array $data): ShopifyDiscountBuyerSelectionAll|ShopifyDiscountContextUnknown|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|ShopifyDiscountMarkets
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountContext: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountBuyerSelectionAll':
                return ShopifyDiscountBuyerSelectionAll::fromArray($data);
            case 'DiscountContextUnknown':
                return ShopifyDiscountContextUnknown::fromArray($data);
            case 'DiscountCustomerSegments':
                return ShopifyDiscountCustomerSegments::fromArray($data);
            case 'DiscountCustomers':
                return ShopifyDiscountCustomers::fromArray($data);
            case 'DiscountMarkets':
                return ShopifyDiscountMarkets::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountContext: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountBuyerSelectionAll|ShopifyDiscountContextUnknown|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|ShopifyDiscountMarkets $object
     * @return array
     */
    public static function toArray(ShopifyDiscountBuyerSelectionAll|ShopifyDiscountContextUnknown|ShopifyDiscountCustomerSegments|ShopifyDiscountCustomers|ShopifyDiscountMarkets $object): array
    {
        if ($object instanceof ShopifyDiscountBuyerSelectionAll) {
            return ['__typename' => 'DiscountBuyerSelectionAll'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountContextUnknown) {
            return ['__typename' => 'DiscountContextUnknown'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCustomerSegments) {
            return ['__typename' => 'DiscountCustomerSegments'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCustomers) {
            return ['__typename' => 'DiscountCustomers'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountMarkets) {
            return ['__typename' => 'DiscountMarkets'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountContext');
    }
}
