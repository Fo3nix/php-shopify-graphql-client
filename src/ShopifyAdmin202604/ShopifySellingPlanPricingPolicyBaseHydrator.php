<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifySellingPlanPricingPolicyBaseHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySellingPlanPricingPolicyBase
     */
    public static function fromArray(array $data): ShopifySellingPlanPricingPolicyBase
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SellingPlanPricingPolicyBase: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SellingPlanFixedPricingPolicy':
                return ShopifySellingPlanFixedPricingPolicy::fromArray($data);
            case 'SellingPlanRecurringPricingPolicy':
                return ShopifySellingPlanRecurringPricingPolicy::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SellingPlanPricingPolicyBase: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySellingPlanPricingPolicyBase $object
     * @return array
     */
    public static function toArray(ShopifySellingPlanPricingPolicyBase $object): array
    {
        if ($object instanceof ShopifySellingPlanFixedPricingPolicy) {
            return ['__typename' => 'SellingPlanFixedPricingPolicy'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanRecurringPricingPolicy) {
            return ['__typename' => 'SellingPlanRecurringPricingPolicy'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SellingPlanPricingPolicyBase');
    }
}
