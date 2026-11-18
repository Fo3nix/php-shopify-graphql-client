<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifySubscriptionDeliveryOptionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionLocalDeliveryOption|ShopifySubscriptionPickupOption|ShopifySubscriptionShippingOption
     */
    public static function fromArray(array $data): ShopifySubscriptionLocalDeliveryOption|ShopifySubscriptionPickupOption|ShopifySubscriptionShippingOption
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionDeliveryOption: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionLocalDeliveryOption':
                return ShopifySubscriptionLocalDeliveryOption::fromArray($data);
            case 'SubscriptionPickupOption':
                return ShopifySubscriptionPickupOption::fromArray($data);
            case 'SubscriptionShippingOption':
                return ShopifySubscriptionShippingOption::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionDeliveryOption: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionLocalDeliveryOption|ShopifySubscriptionPickupOption|ShopifySubscriptionShippingOption $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionLocalDeliveryOption|ShopifySubscriptionPickupOption|ShopifySubscriptionShippingOption $object): array
    {
        if ($object instanceof ShopifySubscriptionLocalDeliveryOption) {
            return ['__typename' => 'SubscriptionLocalDeliveryOption'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionPickupOption) {
            return ['__typename' => 'SubscriptionPickupOption'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionShippingOption) {
            return ['__typename' => 'SubscriptionShippingOption'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionDeliveryOption');
    }
}
