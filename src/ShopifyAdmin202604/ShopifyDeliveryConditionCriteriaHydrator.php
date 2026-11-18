<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyDeliveryConditionCriteriaHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyMoneyV2|ShopifyWeight
     */
    public static function fromArray(array $data): ShopifyMoneyV2|ShopifyWeight
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DeliveryConditionCriteria: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'MoneyV2':
                return ShopifyMoneyV2::fromArray($data);
            case 'Weight':
                return ShopifyWeight::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DeliveryConditionCriteria: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyMoneyV2|ShopifyWeight $object
     * @return array
     */
    public static function toArray(ShopifyMoneyV2|ShopifyWeight $object): array
    {
        if ($object instanceof ShopifyMoneyV2) {
            return ['__typename' => 'MoneyV2'] + $object->asArray();
        }
        if ($object instanceof ShopifyWeight) {
            return ['__typename' => 'Weight'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DeliveryConditionCriteria');
    }
}
