<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyDiscountCustomerBuysValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountPurchaseAmount|ShopifyDiscountQuantity
     */
    public static function fromArray(array $data): ShopifyDiscountPurchaseAmount|ShopifyDiscountQuantity
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountCustomerBuysValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountPurchaseAmount':
                return ShopifyDiscountPurchaseAmount::fromArray($data);
            case 'DiscountQuantity':
                return ShopifyDiscountQuantity::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountCustomerBuysValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountPurchaseAmount|ShopifyDiscountQuantity $object
     * @return array
     */
    public static function toArray(ShopifyDiscountPurchaseAmount|ShopifyDiscountQuantity $object): array
    {
        if ($object instanceof ShopifyDiscountPurchaseAmount) {
            return ['__typename' => 'DiscountPurchaseAmount'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountQuantity) {
            return ['__typename' => 'DiscountQuantity'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountCustomerBuysValue');
    }
}
