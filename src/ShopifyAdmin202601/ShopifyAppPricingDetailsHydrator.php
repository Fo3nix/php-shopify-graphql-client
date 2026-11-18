<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyAppPricingDetailsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyAppRecurringPricing|ShopifyAppUsagePricing
     */
    public static function fromArray(array $data): ShopifyAppRecurringPricing|ShopifyAppUsagePricing
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate AppPricingDetails: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AppRecurringPricing':
                return ShopifyAppRecurringPricing::fromArray($data);
            case 'AppUsagePricing':
                return ShopifyAppUsagePricing::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate AppPricingDetails: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyAppRecurringPricing|ShopifyAppUsagePricing $object
     * @return array
     */
    public static function toArray(ShopifyAppRecurringPricing|ShopifyAppUsagePricing $object): array
    {
        if ($object instanceof ShopifyAppRecurringPricing) {
            return ['__typename' => 'AppRecurringPricing'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppUsagePricing) {
            return ['__typename' => 'AppUsagePricing'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of AppPricingDetails');
    }
}
