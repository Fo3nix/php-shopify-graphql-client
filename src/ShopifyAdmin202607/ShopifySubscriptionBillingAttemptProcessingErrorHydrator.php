<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifySubscriptionBillingAttemptProcessingErrorHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionBillingAttemptProcessingError
     */
    public static function fromArray(array $data): ShopifySubscriptionBillingAttemptProcessingError
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptProcessingError: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionBillingAttemptGenericError':
                return ShopifySubscriptionBillingAttemptGenericError::fromArray($data);
            case 'SubscriptionBillingAttemptInsufficientStockProductVariantsError':
                return ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsError::fromArray($data);
            case 'SubscriptionBillingAttemptOutOfStockProductVariantsError':
                return ShopifySubscriptionBillingAttemptOutOfStockProductVariantsError::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionBillingAttemptProcessingError: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionBillingAttemptProcessingError $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionBillingAttemptProcessingError $object): array
    {
        if ($object instanceof ShopifySubscriptionBillingAttemptGenericError) {
            return ['__typename' => 'SubscriptionBillingAttemptGenericError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsError) {
            return ['__typename' => 'SubscriptionBillingAttemptInsufficientStockProductVariantsError'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionBillingAttemptOutOfStockProductVariantsError) {
            return ['__typename' => 'SubscriptionBillingAttemptOutOfStockProductVariantsError'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionBillingAttemptProcessingError');
    }
}
