<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyGiftCardTransactionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyGiftCardTransaction
     */
    public static function fromArray(array $data): ShopifyGiftCardTransaction
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate GiftCardTransaction: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'GiftCardCreditTransaction':
                return ShopifyGiftCardCreditTransaction::fromArray($data);
            case 'GiftCardDebitTransaction':
                return ShopifyGiftCardDebitTransaction::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate GiftCardTransaction: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyGiftCardTransaction $object
     * @return array
     */
    public static function toArray(ShopifyGiftCardTransaction $object): array
    {
        if ($object instanceof ShopifyGiftCardCreditTransaction) {
            return ['__typename' => 'GiftCardCreditTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyGiftCardDebitTransaction) {
            return ['__typename' => 'GiftCardDebitTransaction'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of GiftCardTransaction');
    }
}
