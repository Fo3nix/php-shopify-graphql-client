<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifySaleHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySale
     */
    public static function fromArray(array $data): ShopifySale
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Sale: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AdditionalFeeSale':
                return ShopifyAdditionalFeeSale::fromArray($data);
            case 'AdjustmentSale':
                return ShopifyAdjustmentSale::fromArray($data);
            case 'DutySale':
                return ShopifyDutySale::fromArray($data);
            case 'FeeSale':
                return ShopifyFeeSale::fromArray($data);
            case 'GiftCardSale':
                return ShopifyGiftCardSale::fromArray($data);
            case 'ProductSale':
                return ShopifyProductSale::fromArray($data);
            case 'ShippingLineSale':
                return ShopifyShippingLineSale::fromArray($data);
            case 'TipSale':
                return ShopifyTipSale::fromArray($data);
            case 'UnknownSale':
                return ShopifyUnknownSale::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Sale: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySale $object
     * @return array
     */
    public static function toArray(ShopifySale $object): array
    {
        if ($object instanceof ShopifyAdditionalFeeSale) {
            return ['__typename' => 'AdditionalFeeSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyAdjustmentSale) {
            return ['__typename' => 'AdjustmentSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyDutySale) {
            return ['__typename' => 'DutySale'] + $object->asArray();
        }
        if ($object instanceof ShopifyFeeSale) {
            return ['__typename' => 'FeeSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardSale) {
            return ['__typename' => 'GiftCardSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductSale) {
            return ['__typename' => 'ProductSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyShippingLineSale) {
            return ['__typename' => 'ShippingLineSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyTipSale) {
            return ['__typename' => 'TipSale'] + $object->asArray();
        }
        if ($object instanceof ShopifyUnknownSale) {
            return ['__typename' => 'UnknownSale'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Sale');
    }
}
