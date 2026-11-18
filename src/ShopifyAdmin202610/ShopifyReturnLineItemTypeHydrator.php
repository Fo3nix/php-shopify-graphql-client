<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyReturnLineItemTypeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyReturnLineItemType
     */
    public static function fromArray(array $data): ShopifyReturnLineItemType
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate ReturnLineItemType: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'ReturnLineItem':
                return ShopifyReturnLineItem::fromArray($data);
            case 'UnverifiedReturnLineItem':
                return ShopifyUnverifiedReturnLineItem::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate ReturnLineItemType: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyReturnLineItemType $object
     * @return array
     */
    public static function toArray(ShopifyReturnLineItemType $object): array
    {
        if ($object instanceof ShopifyReturnLineItem) {
            return ['__typename' => 'ReturnLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyUnverifiedReturnLineItem) {
            return ['__typename' => 'UnverifiedReturnLineItem'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of ReturnLineItemType');
    }
}
