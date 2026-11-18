<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyTenderTransactionDetailsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyTenderTransactionCreditCardDetails
     */
    public static function fromArray(array $data): ShopifyTenderTransactionCreditCardDetails
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate TenderTransactionDetails: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'TenderTransactionCreditCardDetails':
                return ShopifyTenderTransactionCreditCardDetails::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate TenderTransactionDetails: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyTenderTransactionCreditCardDetails $object
     * @return array
     */
    public static function toArray(ShopifyTenderTransactionCreditCardDetails $object): array
    {
        if ($object instanceof ShopifyTenderTransactionCreditCardDetails) {
            return ['__typename' => 'TenderTransactionCreditCardDetails'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of TenderTransactionDetails');
    }
}
