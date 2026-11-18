<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifySellingPlanCheckoutChargeValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyMoneyV2|ShopifySellingPlanCheckoutChargePercentageValue
     */
    public static function fromArray(array $data): ShopifyMoneyV2|ShopifySellingPlanCheckoutChargePercentageValue
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SellingPlanCheckoutChargeValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'MoneyV2':
                return ShopifyMoneyV2::fromArray($data);
            case 'SellingPlanCheckoutChargePercentageValue':
                return ShopifySellingPlanCheckoutChargePercentageValue::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SellingPlanCheckoutChargeValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyMoneyV2|ShopifySellingPlanCheckoutChargePercentageValue $object
     * @return array
     */
    public static function toArray(ShopifyMoneyV2|ShopifySellingPlanCheckoutChargePercentageValue $object): array
    {
        if ($object instanceof ShopifyMoneyV2) {
            return ['__typename' => 'MoneyV2'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanCheckoutChargePercentageValue) {
            return ['__typename' => 'SellingPlanCheckoutChargePercentageValue'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SellingPlanCheckoutChargeValue');
    }
}
