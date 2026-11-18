<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifySubscriptionContractBaseHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionContractBase
     */
    public static function fromArray(array $data): ShopifySubscriptionContractBase
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionContractBase: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionBillingCycleEditedContract':
                return ShopifySubscriptionBillingCycleEditedContract::fromArray($data);
            case 'SubscriptionContract':
                return ShopifySubscriptionContract::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionContractBase: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionContractBase $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionContractBase $object): array
    {
        if ($object instanceof ShopifySubscriptionBillingCycleEditedContract) {
            return ['__typename' => 'SubscriptionBillingCycleEditedContract'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContract) {
            return ['__typename' => 'SubscriptionContract'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionContractBase');
    }
}
