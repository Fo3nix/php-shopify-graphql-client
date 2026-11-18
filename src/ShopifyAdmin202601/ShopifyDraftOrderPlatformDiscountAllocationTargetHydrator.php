<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyDraftOrderPlatformDiscountAllocationTargetHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCalculatedDraftOrderLineItem|ShopifyDraftOrderLineItem|ShopifyShippingLine
     */
    public static function fromArray(array $data): ShopifyCalculatedDraftOrderLineItem|ShopifyDraftOrderLineItem|ShopifyShippingLine
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DraftOrderPlatformDiscountAllocationTarget: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CalculatedDraftOrderLineItem':
                return ShopifyCalculatedDraftOrderLineItem::fromArray($data);
            case 'DraftOrderLineItem':
                return ShopifyDraftOrderLineItem::fromArray($data);
            case 'ShippingLine':
                return ShopifyShippingLine::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DraftOrderPlatformDiscountAllocationTarget: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCalculatedDraftOrderLineItem|ShopifyDraftOrderLineItem|ShopifyShippingLine $object
     * @return array
     */
    public static function toArray(ShopifyCalculatedDraftOrderLineItem|ShopifyDraftOrderLineItem|ShopifyShippingLine $object): array
    {
        if ($object instanceof ShopifyCalculatedDraftOrderLineItem) {
            return ['__typename' => 'CalculatedDraftOrderLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrderLineItem) {
            return ['__typename' => 'DraftOrderLineItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyShippingLine) {
            return ['__typename' => 'ShippingLine'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DraftOrderPlatformDiscountAllocationTarget');
    }
}
