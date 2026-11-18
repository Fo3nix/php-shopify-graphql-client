<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifySubscriptionContractCalculationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionContractCalculationFailure|ShopifySubscriptionContractCalculationPending|ShopifySubscriptionContractCalculationSuccess
     */
    public static function fromArray(array $data): ShopifySubscriptionContractCalculationFailure|ShopifySubscriptionContractCalculationPending|ShopifySubscriptionContractCalculationSuccess
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionContractCalculation: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionContractCalculationFailure':
                return ShopifySubscriptionContractCalculationFailure::fromArray($data);
            case 'SubscriptionContractCalculationPending':
                return ShopifySubscriptionContractCalculationPending::fromArray($data);
            case 'SubscriptionContractCalculationSuccess':
                return ShopifySubscriptionContractCalculationSuccess::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionContractCalculation: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionContractCalculationFailure|ShopifySubscriptionContractCalculationPending|ShopifySubscriptionContractCalculationSuccess $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionContractCalculationFailure|ShopifySubscriptionContractCalculationPending|ShopifySubscriptionContractCalculationSuccess $object): array
    {
        if ($object instanceof ShopifySubscriptionContractCalculationFailure) {
            return ['__typename' => 'SubscriptionContractCalculationFailure'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContractCalculationPending) {
            return ['__typename' => 'SubscriptionContractCalculationPending'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionContractCalculationSuccess) {
            return ['__typename' => 'SubscriptionContractCalculationSuccess'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionContractCalculation');
    }
}
