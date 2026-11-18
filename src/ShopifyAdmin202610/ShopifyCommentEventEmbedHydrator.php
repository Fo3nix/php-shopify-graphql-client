<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCommentEventEmbedHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCustomer|ShopifyDraftOrder|ShopifyInventoryTransfer|ShopifyOrder|ShopifyProduct|ShopifyProductVariant
     */
    public static function fromArray(array $data): ShopifyCustomer|ShopifyDraftOrder|ShopifyInventoryTransfer|ShopifyOrder|ShopifyProduct|ShopifyProductVariant
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CommentEventEmbed: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'DraftOrder':
                return ShopifyDraftOrder::fromArray($data);
            case 'InventoryTransfer':
                return ShopifyInventoryTransfer::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CommentEventEmbed: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCustomer|ShopifyDraftOrder|ShopifyInventoryTransfer|ShopifyOrder|ShopifyProduct|ShopifyProductVariant $object
     * @return array
     */
    public static function toArray(ShopifyCustomer|ShopifyDraftOrder|ShopifyInventoryTransfer|ShopifyOrder|ShopifyProduct|ShopifyProductVariant $object): array
    {
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrder) {
            return ['__typename' => 'DraftOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransfer) {
            return ['__typename' => 'InventoryTransfer'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CommentEventEmbed');
    }
}
