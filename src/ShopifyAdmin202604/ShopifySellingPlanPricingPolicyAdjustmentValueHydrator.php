<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifySellingPlanPricingPolicyAdjustmentValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue
     */
    public static function fromArray(array $data): ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SellingPlanPricingPolicyAdjustmentValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'MoneyV2':
                return ShopifyMoneyV2::fromArray($data);
            case 'SellingPlanPricingPolicyPercentageValue':
                return ShopifySellingPlanPricingPolicyPercentageValue::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SellingPlanPricingPolicyAdjustmentValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue $object
     * @return array
     */
    public static function toArray(ShopifyMoneyV2|ShopifySellingPlanPricingPolicyPercentageValue $object): array
    {
        if ($object instanceof ShopifyMoneyV2) {
            return ['__typename' => 'MoneyV2'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanPricingPolicyPercentageValue) {
            return ['__typename' => 'SellingPlanPricingPolicyPercentageValue'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SellingPlanPricingPolicyAdjustmentValue');
    }
}
