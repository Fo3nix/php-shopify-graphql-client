<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyOrderStagedChangeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine
     */
    public static function fromArray(array $data): ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate OrderStagedChange: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'OrderStagedChangeAddCustomItem':
                return ShopifyOrderStagedChangeAddCustomItem::fromArray($data);
            case 'OrderStagedChangeAddLineItemDiscount':
                return ShopifyOrderStagedChangeAddLineItemDiscount::fromArray($data);
            case 'OrderStagedChangeAddShippingLine':
                return ShopifyOrderStagedChangeAddShippingLine::fromArray($data);
            case 'OrderStagedChangeAddVariant':
                return ShopifyOrderStagedChangeAddVariant::fromArray($data);
            case 'OrderStagedChangeDecrementItem':
                return ShopifyOrderStagedChangeDecrementItem::fromArray($data);
            case 'OrderStagedChangeIncrementItem':
                return ShopifyOrderStagedChangeIncrementItem::fromArray($data);
            case 'OrderStagedChangeRemoveDiscount':
                return ShopifyOrderStagedChangeRemoveDiscount::fromArray($data);
            case 'OrderStagedChangeRemoveShippingLine':
                return ShopifyOrderStagedChangeRemoveShippingLine::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate OrderStagedChange: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine $object
     * @return array
     */
    public static function toArray(ShopifyOrderStagedChangeAddCustomItem|ShopifyOrderStagedChangeAddLineItemDiscount|ShopifyOrderStagedChangeAddShippingLine|ShopifyOrderStagedChangeAddVariant|ShopifyOrderStagedChangeDecrementItem|ShopifyOrderStagedChangeIncrementItem|ShopifyOrderStagedChangeRemoveDiscount|ShopifyOrderStagedChangeRemoveShippingLine $object): array
    {
        if ($object instanceof ShopifyOrderStagedChangeAddCustomItem) {
            return ['__typename' => 'OrderStagedChangeAddCustomItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeAddLineItemDiscount) {
            return ['__typename' => 'OrderStagedChangeAddLineItemDiscount'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeAddShippingLine) {
            return ['__typename' => 'OrderStagedChangeAddShippingLine'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeAddVariant) {
            return ['__typename' => 'OrderStagedChangeAddVariant'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeDecrementItem) {
            return ['__typename' => 'OrderStagedChangeDecrementItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeIncrementItem) {
            return ['__typename' => 'OrderStagedChangeIncrementItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeRemoveDiscount) {
            return ['__typename' => 'OrderStagedChangeRemoveDiscount'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderStagedChangeRemoveShippingLine) {
            return ['__typename' => 'OrderStagedChangeRemoveShippingLine'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of OrderStagedChange');
    }
}
