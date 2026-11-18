<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyDiscountItemsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts
     */
    public static function fromArray(array $data): ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountItems: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AllDiscountItems':
                return ShopifyAllDiscountItems::fromArray($data);
            case 'DiscountCollections':
                return ShopifyDiscountCollections::fromArray($data);
            case 'DiscountProducts':
                return ShopifyDiscountProducts::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountItems: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts $object
     * @return array
     */
    public static function toArray(ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts $object): array
    {
        if ($object instanceof ShopifyAllDiscountItems) {
            return ['__typename' => 'AllDiscountItems'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCollections) {
            return ['__typename' => 'DiscountCollections'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountProducts) {
            return ['__typename' => 'DiscountProducts'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountItems');
    }
}
