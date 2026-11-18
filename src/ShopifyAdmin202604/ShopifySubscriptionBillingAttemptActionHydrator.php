<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifySubscriptionBillingAttemptActionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionBillingAttemptPaymentChallenge
     */
    public static function fromArray(array $data): ShopifySubscriptionBillingAttemptPaymentChallenge
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptAction: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionBillingAttemptPaymentChallenge':
                return ShopifySubscriptionBillingAttemptPaymentChallenge::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptAction: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionBillingAttemptPaymentChallenge $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionBillingAttemptPaymentChallenge $object): array
    {
        if ($object instanceof ShopifySubscriptionBillingAttemptPaymentChallenge) {
            return ['__typename' => 'SubscriptionBillingAttemptPaymentChallenge'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionBillingAttemptAction');
    }
}
