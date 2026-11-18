<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyReturnOutcomeFinancialTransferHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyInvoiceReturnOutcome|ShopifyRefundReturnOutcome
     */
    public static function fromArray(array $data): ShopifyInvoiceReturnOutcome|ShopifyRefundReturnOutcome
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate ReturnOutcomeFinancialTransfer: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'InvoiceReturnOutcome':
                return ShopifyInvoiceReturnOutcome::fromArray($data);
            case 'RefundReturnOutcome':
                return ShopifyRefundReturnOutcome::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate ReturnOutcomeFinancialTransfer: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyInvoiceReturnOutcome|ShopifyRefundReturnOutcome $object
     * @return array
     */
    public static function toArray(ShopifyInvoiceReturnOutcome|ShopifyRefundReturnOutcome $object): array
    {
        if ($object instanceof ShopifyInvoiceReturnOutcome) {
            return ['__typename' => 'InvoiceReturnOutcome'] + $object->asArray();
        }
        if ($object instanceof ShopifyRefundReturnOutcome) {
            return ['__typename' => 'RefundReturnOutcome'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of ReturnOutcomeFinancialTransfer');
    }
}
