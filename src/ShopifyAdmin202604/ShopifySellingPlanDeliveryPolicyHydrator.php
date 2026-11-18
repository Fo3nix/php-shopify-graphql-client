<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifySellingPlanDeliveryPolicyHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySellingPlanFixedDeliveryPolicy|ShopifySellingPlanRecurringDeliveryPolicy
     */
    public static function fromArray(array $data): ShopifySellingPlanFixedDeliveryPolicy|ShopifySellingPlanRecurringDeliveryPolicy
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SellingPlanDeliveryPolicy: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SellingPlanFixedDeliveryPolicy':
                return ShopifySellingPlanFixedDeliveryPolicy::fromArray($data);
            case 'SellingPlanRecurringDeliveryPolicy':
                return ShopifySellingPlanRecurringDeliveryPolicy::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SellingPlanDeliveryPolicy: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySellingPlanFixedDeliveryPolicy|ShopifySellingPlanRecurringDeliveryPolicy $object
     * @return array
     */
    public static function toArray(ShopifySellingPlanFixedDeliveryPolicy|ShopifySellingPlanRecurringDeliveryPolicy $object): array
    {
        if ($object instanceof ShopifySellingPlanFixedDeliveryPolicy) {
            return ['__typename' => 'SellingPlanFixedDeliveryPolicy'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanRecurringDeliveryPolicy) {
            return ['__typename' => 'SellingPlanRecurringDeliveryPolicy'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SellingPlanDeliveryPolicy');
    }
}
