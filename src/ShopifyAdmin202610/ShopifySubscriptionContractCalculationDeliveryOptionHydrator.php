<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifySubscriptionContractCalculationDeliveryOptionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionContractCalculationLocalDeliveryOption|ShopifySubscriptionContractCalculationPickupOption|ShopifySubscriptionContractCalculationShippingOption
     */
    public static function fromArray(array $data): ShopifySubscriptionContractCalculationLocalDeliveryOption|ShopifySubscriptionContractCalculationPickupOption|ShopifySubscriptionContractCalculationShippingOption
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionContractCalculationDeliveryOption: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionContractCalculationLocalDeliveryOption':
                return ShopifySubscriptionContractCalculationLocalDeliveryOption::fromArray($data);
            case 'SubscriptionContractCalculationPickupOption':
                return ShopifySubscriptionContractCalculationPickupOption::fromArray($data);
            case 'SubscriptionContractCalculationShippingOption':
                return ShopifySubscriptionContractCalculationShippingOption::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionContractCalculationDeliveryOption: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionContractCalculationLocalDeliveryOption|ShopifySubscriptionContractCalculationPickupOption|ShopifySubscriptionContractCalculationShippingOption $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionContractCalculationLocalDeliveryOption|ShopifySubscriptionContractCalculationPickupOption|ShopifySubscriptionContractCalculationShippingOption $object): array
    {
        if ($object instanceof ShopifySubscriptionContractCalculationLocalDeliveryOption) {
            return ['__typename' => 'SubscriptionContractCalculationLocalDeliveryOption'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContractCalculationPickupOption) {
            return ['__typename' => 'SubscriptionContractCalculationPickupOption'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContractCalculationShippingOption) {
            return ['__typename' => 'SubscriptionContractCalculationShippingOption'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionContractCalculationDeliveryOption');
    }
}
