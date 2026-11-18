<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyDiscountEffectHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountAmount|ShopifyDiscountPercentage
     */
    public static function fromArray(array $data): ShopifyDiscountAmount|ShopifyDiscountPercentage
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountEffect: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountAmount':
                return ShopifyDiscountAmount::fromArray($data);
            case 'DiscountPercentage':
                return ShopifyDiscountPercentage::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountEffect: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountAmount|ShopifyDiscountPercentage $object
     * @return array
     */
    public static function toArray(ShopifyDiscountAmount|ShopifyDiscountPercentage $object): array
    {
        if ($object instanceof ShopifyDiscountAmount) {
            return ['__typename' => 'DiscountAmount'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountPercentage) {
            return ['__typename' => 'DiscountPercentage'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountEffect');
    }
}
