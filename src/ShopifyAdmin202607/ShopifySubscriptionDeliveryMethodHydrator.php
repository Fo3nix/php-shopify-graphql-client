<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifySubscriptionDeliveryMethodHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping
     */
    public static function fromArray(array $data): ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionDeliveryMethod: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionDeliveryMethodLocalDelivery':
                return ShopifySubscriptionDeliveryMethodLocalDelivery::fromArray($data);
            case 'SubscriptionDeliveryMethodPickup':
                return ShopifySubscriptionDeliveryMethodPickup::fromArray($data);
            case 'SubscriptionDeliveryMethodShipping':
                return ShopifySubscriptionDeliveryMethodShipping::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionDeliveryMethod: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionDeliveryMethodLocalDelivery|ShopifySubscriptionDeliveryMethodPickup|ShopifySubscriptionDeliveryMethodShipping $object): array
    {
        if ($object instanceof ShopifySubscriptionDeliveryMethodLocalDelivery) {
            return ['__typename' => 'SubscriptionDeliveryMethodLocalDelivery'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionDeliveryMethodPickup) {
            return ['__typename' => 'SubscriptionDeliveryMethodPickup'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionDeliveryMethodShipping) {
            return ['__typename' => 'SubscriptionDeliveryMethodShipping'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionDeliveryMethod');
    }
}
