<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyJobResultHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyJobResult
     */
    public static function fromArray(array $data): ShopifyJobResult
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate JobResult: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CustomerSegmentMembersQuery':
                return ShopifyCustomerSegmentMembersQuery::fromArray($data);
            case 'OrderCancelJobResult':
                return ShopifyOrderCancelJobResult::fromArray($data);
            case 'OrderCreateMandatePaymentJobResult':
                return ShopifyOrderCreateMandatePaymentJobResult::fromArray($data);
            case 'ShippingLabelPurchaseResult':
                return ShopifyShippingLabelPurchaseResult::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate JobResult: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyJobResult $object
     * @return array
     */
    public static function toArray(ShopifyJobResult $object): array
    {
        if ($object instanceof ShopifyCustomerSegmentMembersQuery) {
            return ['__typename' => 'CustomerSegmentMembersQuery'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCancelJobResult) {
            return ['__typename' => 'OrderCancelJobResult'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrderCreateMandatePaymentJobResult) {
            return ['__typename' => 'OrderCreateMandatePaymentJobResult'] + $object->asArray();
        }
        if ($object instanceof ShopifyShippingLabelPurchaseResult) {
            return ['__typename' => 'ShippingLabelPurchaseResult'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of JobResult');
    }
}
