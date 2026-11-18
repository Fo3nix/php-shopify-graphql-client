<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyDiscountMinimumRequirementHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountMinimumQuantity|ShopifyDiscountMinimumSubtotal
     */
    public static function fromArray(array $data): ShopifyDiscountMinimumQuantity|ShopifyDiscountMinimumSubtotal
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountMinimumRequirement: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountMinimumQuantity':
                return ShopifyDiscountMinimumQuantity::fromArray($data);
            case 'DiscountMinimumSubtotal':
                return ShopifyDiscountMinimumSubtotal::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountMinimumRequirement: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountMinimumQuantity|ShopifyDiscountMinimumSubtotal $object
     * @return array
     */
    public static function toArray(ShopifyDiscountMinimumQuantity|ShopifyDiscountMinimumSubtotal $object): array
    {
        if ($object instanceof ShopifyDiscountMinimumQuantity) {
            return ['__typename' => 'DiscountMinimumQuantity'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountMinimumSubtotal) {
            return ['__typename' => 'DiscountMinimumSubtotal'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountMinimumRequirement');
    }
}
