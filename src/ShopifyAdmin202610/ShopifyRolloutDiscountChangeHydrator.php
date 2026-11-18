<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyRolloutDiscountChangeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyRolloutDiscountChange
     */
    public static function fromArray(array $data): ShopifyRolloutDiscountChange
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate RolloutDiscountChange: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'RolloutDiscountActivateChange':
                return ShopifyRolloutDiscountActivateChange::fromArray($data);
            case 'RolloutDiscountExpireChange':
                return ShopifyRolloutDiscountExpireChange::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate RolloutDiscountChange: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyRolloutDiscountChange $object
     * @return array
     */
    public static function toArray(ShopifyRolloutDiscountChange $object): array
    {
        if ($object instanceof ShopifyRolloutDiscountActivateChange) {
            return ['__typename' => 'RolloutDiscountActivateChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutDiscountExpireChange) {
            return ['__typename' => 'RolloutDiscountExpireChange'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of RolloutDiscountChange');
    }
}
