<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifySubscriptionDiscountHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount
     */
    public static function fromArray(array $data): ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionDiscount: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionAppliedCodeDiscount':
                return ShopifySubscriptionAppliedCodeDiscount::fromArray($data);
            case 'SubscriptionManualDiscount':
                return ShopifySubscriptionManualDiscount::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionDiscount: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionAppliedCodeDiscount|ShopifySubscriptionManualDiscount $object): array
    {
        if ($object instanceof ShopifySubscriptionAppliedCodeDiscount) {
            return ['__typename' => 'SubscriptionAppliedCodeDiscount'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionManualDiscount) {
            return ['__typename' => 'SubscriptionManualDiscount'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionDiscount');
    }
}
