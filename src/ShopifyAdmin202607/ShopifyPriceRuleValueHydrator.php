<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyPriceRuleValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyPriceRuleFixedAmountValue|ShopifyPriceRulePercentValue
     */
    public static function fromArray(array $data): ShopifyPriceRuleFixedAmountValue|ShopifyPriceRulePercentValue
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate PriceRuleValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'PriceRuleFixedAmountValue':
                return ShopifyPriceRuleFixedAmountValue::fromArray($data);
            case 'PriceRulePercentValue':
                return ShopifyPriceRulePercentValue::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate PriceRuleValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyPriceRuleFixedAmountValue|ShopifyPriceRulePercentValue $object
     * @return array
     */
    public static function toArray(ShopifyPriceRuleFixedAmountValue|ShopifyPriceRulePercentValue $object): array
    {
        if ($object instanceof ShopifyPriceRuleFixedAmountValue) {
            return ['__typename' => 'PriceRuleFixedAmountValue'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceRulePercentValue) {
            return ['__typename' => 'PriceRulePercentValue'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of PriceRuleValue');
    }
}
