<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifySubscriptionDiscountValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionDiscountFixedAmountValue|ShopifySubscriptionDiscountPercentageValue
     */
    public static function fromArray(array $data): ShopifySubscriptionDiscountFixedAmountValue|ShopifySubscriptionDiscountPercentageValue
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionDiscountValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionDiscountFixedAmountValue':
                return ShopifySubscriptionDiscountFixedAmountValue::fromArray($data);
            case 'SubscriptionDiscountPercentageValue':
                return ShopifySubscriptionDiscountPercentageValue::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionDiscountValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionDiscountFixedAmountValue|ShopifySubscriptionDiscountPercentageValue $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionDiscountFixedAmountValue|ShopifySubscriptionDiscountPercentageValue $object): array
    {
        if ($object instanceof ShopifySubscriptionDiscountFixedAmountValue) {
            return ['__typename' => 'SubscriptionDiscountFixedAmountValue'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionDiscountPercentageValue) {
            return ['__typename' => 'SubscriptionDiscountPercentageValue'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionDiscountValue');
    }
}
