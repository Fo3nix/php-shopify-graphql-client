<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifySubscriptionBillingAttemptStateHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionBillingAttemptActionRequiredState|ShopifySubscriptionBillingAttemptFailedState|ShopifySubscriptionBillingAttemptPendingState|ShopifySubscriptionBillingAttemptSuccessState
     */
    public static function fromArray(array $data): ShopifySubscriptionBillingAttemptActionRequiredState|ShopifySubscriptionBillingAttemptFailedState|ShopifySubscriptionBillingAttemptPendingState|ShopifySubscriptionBillingAttemptSuccessState
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptState: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionBillingAttemptActionRequiredState':
                return ShopifySubscriptionBillingAttemptActionRequiredState::fromArray($data);
            case 'SubscriptionBillingAttemptFailedState':
                return ShopifySubscriptionBillingAttemptFailedState::fromArray($data);
            case 'SubscriptionBillingAttemptPendingState':
                return ShopifySubscriptionBillingAttemptPendingState::fromArray($data);
            case 'SubscriptionBillingAttemptSuccessState':
                return ShopifySubscriptionBillingAttemptSuccessState::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptState: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionBillingAttemptActionRequiredState|ShopifySubscriptionBillingAttemptFailedState|ShopifySubscriptionBillingAttemptPendingState|ShopifySubscriptionBillingAttemptSuccessState $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionBillingAttemptActionRequiredState|ShopifySubscriptionBillingAttemptFailedState|ShopifySubscriptionBillingAttemptPendingState|ShopifySubscriptionBillingAttemptSuccessState $object): array
    {
        if ($object instanceof ShopifySubscriptionBillingAttemptActionRequiredState) {
            return ['__typename' => 'SubscriptionBillingAttemptActionRequiredState'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptFailedState) {
            return ['__typename' => 'SubscriptionBillingAttemptFailedState'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptPendingState) {
            return ['__typename' => 'SubscriptionBillingAttemptPendingState'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptSuccessState) {
            return ['__typename' => 'SubscriptionBillingAttemptSuccessState'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionBillingAttemptState');
    }
}
