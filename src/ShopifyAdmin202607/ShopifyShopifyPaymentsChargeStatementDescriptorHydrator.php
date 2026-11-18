<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyShopifyPaymentsChargeStatementDescriptorHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyShopifyPaymentsChargeStatementDescriptor
     */
    public static function fromArray(array $data): ShopifyShopifyPaymentsChargeStatementDescriptor
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate ShopifyPaymentsChargeStatementDescriptor: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'ShopifyPaymentsDefaultChargeStatementDescriptor':
                return ShopifyShopifyPaymentsDefaultChargeStatementDescriptor::fromArray($data);
            case 'ShopifyPaymentsJpChargeStatementDescriptor':
                return ShopifyShopifyPaymentsJpChargeStatementDescriptor::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate ShopifyPaymentsChargeStatementDescriptor: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyShopifyPaymentsChargeStatementDescriptor $object
     * @return array
     */
    public static function toArray(ShopifyShopifyPaymentsChargeStatementDescriptor $object): array
    {
        if ($object instanceof ShopifyShopifyPaymentsDefaultChargeStatementDescriptor) {
            return ['__typename' => 'ShopifyPaymentsDefaultChargeStatementDescriptor'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsJpChargeStatementDescriptor) {
            return ['__typename' => 'ShopifyPaymentsJpChargeStatementDescriptor'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of ShopifyPaymentsChargeStatementDescriptor');
    }
}
