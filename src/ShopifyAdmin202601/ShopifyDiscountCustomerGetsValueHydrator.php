<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyDiscountCustomerGetsValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountAmount|ShopifyDiscountOnQuantity|ShopifyDiscountPercentage
     */
    public static function fromArray(array $data): ShopifyDiscountAmount|ShopifyDiscountOnQuantity|ShopifyDiscountPercentage
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountCustomerGetsValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountAmount':
                return ShopifyDiscountAmount::fromArray($data);
            case 'DiscountOnQuantity':
                return ShopifyDiscountOnQuantity::fromArray($data);
            case 'DiscountPercentage':
                return ShopifyDiscountPercentage::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountCustomerGetsValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountAmount|ShopifyDiscountOnQuantity|ShopifyDiscountPercentage $object
     * @return array
     */
    public static function toArray(ShopifyDiscountAmount|ShopifyDiscountOnQuantity|ShopifyDiscountPercentage $object): array
    {
        if ($object instanceof ShopifyDiscountAmount) {
            return ['__typename' => 'DiscountAmount'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountOnQuantity) {
            return ['__typename' => 'DiscountOnQuantity'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountPercentage) {
            return ['__typename' => 'DiscountPercentage'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountCustomerGetsValue');
    }
}
