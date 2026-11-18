<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifySubscriptionBillingAttemptErrorHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionBillingAttemptGeneralError|ShopifySubscriptionBillingAttemptInventoryError|ShopifySubscriptionBillingAttemptPaymentError|ShopifySubscriptionBillingAttemptUnexpectedError
     */
    public static function fromArray(array $data): ShopifySubscriptionBillingAttemptGeneralError|ShopifySubscriptionBillingAttemptInventoryError|ShopifySubscriptionBillingAttemptPaymentError|ShopifySubscriptionBillingAttemptUnexpectedError
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptError: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionBillingAttemptGeneralError':
                return ShopifySubscriptionBillingAttemptGeneralError::fromArray($data);
            case 'SubscriptionBillingAttemptInventoryError':
                return ShopifySubscriptionBillingAttemptInventoryError::fromArray($data);
            case 'SubscriptionBillingAttemptPaymentError':
                return ShopifySubscriptionBillingAttemptPaymentError::fromArray($data);
            case 'SubscriptionBillingAttemptUnexpectedError':
                return ShopifySubscriptionBillingAttemptUnexpectedError::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptError: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionBillingAttemptGeneralError|ShopifySubscriptionBillingAttemptInventoryError|ShopifySubscriptionBillingAttemptPaymentError|ShopifySubscriptionBillingAttemptUnexpectedError $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionBillingAttemptGeneralError|ShopifySubscriptionBillingAttemptInventoryError|ShopifySubscriptionBillingAttemptPaymentError|ShopifySubscriptionBillingAttemptUnexpectedError $object): array
    {
        if ($object instanceof ShopifySubscriptionBillingAttemptGeneralError) {
            return ['__typename' => 'SubscriptionBillingAttemptGeneralError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptInventoryError) {
            return ['__typename' => 'SubscriptionBillingAttemptInventoryError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptPaymentError) {
            return ['__typename' => 'SubscriptionBillingAttemptPaymentError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptUnexpectedError) {
            return ['__typename' => 'SubscriptionBillingAttemptUnexpectedError'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionBillingAttemptError');
    }
}
