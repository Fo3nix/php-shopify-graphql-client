<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifySalesAgreementHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySalesAgreement
     */
    public static function fromArray(array $data): ShopifySalesAgreement
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SalesAgreement: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'OrderAgreement':
                return ShopifyOrderAgreement::fromArray($data);
            case 'OrderEditAgreement':
                return ShopifyOrderEditAgreement::fromArray($data);
            case 'RefundAgreement':
                return ShopifyRefundAgreement::fromArray($data);
            case 'ReturnAgreement':
                return ShopifyReturnAgreement::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SalesAgreement: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySalesAgreement $object
     * @return array
     */
    public static function toArray(ShopifySalesAgreement $object): array
    {
        if ($object instanceof ShopifyOrderAgreement) {
            return ['__typename' => 'OrderAgreement'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderEditAgreement) {
            return ['__typename' => 'OrderEditAgreement'] + $object->asArray();
        }
        if ($object instanceof ShopifyRefundAgreement) {
            return ['__typename' => 'RefundAgreement'] + $object->asArray();
        }
        if ($object instanceof ShopifyReturnAgreement) {
            return ['__typename' => 'ReturnAgreement'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SalesAgreement');
    }
}
