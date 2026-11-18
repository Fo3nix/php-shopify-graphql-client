<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifySellingPlanBillingPolicyHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySellingPlanFixedBillingPolicy|ShopifySellingPlanRecurringBillingPolicy
     */
    public static function fromArray(array $data): ShopifySellingPlanFixedBillingPolicy|ShopifySellingPlanRecurringBillingPolicy
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SellingPlanBillingPolicy: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SellingPlanFixedBillingPolicy':
                return ShopifySellingPlanFixedBillingPolicy::fromArray($data);
            case 'SellingPlanRecurringBillingPolicy':
                return ShopifySellingPlanRecurringBillingPolicy::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SellingPlanBillingPolicy: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySellingPlanFixedBillingPolicy|ShopifySellingPlanRecurringBillingPolicy $object
     * @return array
     */
    public static function toArray(ShopifySellingPlanFixedBillingPolicy|ShopifySellingPlanRecurringBillingPolicy $object): array
    {
        if ($object instanceof ShopifySellingPlanFixedBillingPolicy) {
            return ['__typename' => 'SellingPlanFixedBillingPolicy'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanRecurringBillingPolicy) {
            return ['__typename' => 'SellingPlanRecurringBillingPolicy'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SellingPlanBillingPolicy');
    }
}
