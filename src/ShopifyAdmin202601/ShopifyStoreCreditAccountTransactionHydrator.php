<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyStoreCreditAccountTransactionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyStoreCreditAccountTransaction
     */
    public static function fromArray(array $data): ShopifyStoreCreditAccountTransaction
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate StoreCreditAccountTransaction: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'StoreCreditAccountCreditTransaction':
                return ShopifyStoreCreditAccountCreditTransaction::fromArray($data);
            case 'StoreCreditAccountDebitRevertTransaction':
                return ShopifyStoreCreditAccountDebitRevertTransaction::fromArray($data);
            case 'StoreCreditAccountDebitTransaction':
                return ShopifyStoreCreditAccountDebitTransaction::fromArray($data);
            case 'StoreCreditAccountExpirationTransaction':
                return ShopifyStoreCreditAccountExpirationTransaction::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate StoreCreditAccountTransaction: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyStoreCreditAccountTransaction $object
     * @return array
     */
    public static function toArray(ShopifyStoreCreditAccountTransaction $object): array
    {
        if ($object instanceof ShopifyStoreCreditAccountCreditTransaction) {
            return ['__typename' => 'StoreCreditAccountCreditTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountDebitRevertTransaction) {
            return ['__typename' => 'StoreCreditAccountDebitRevertTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountDebitTransaction) {
            return ['__typename' => 'StoreCreditAccountDebitTransaction'] + $object->asArray();
        }
        if ($object instanceof ShopifyStoreCreditAccountExpirationTransaction) {
            return ['__typename' => 'StoreCreditAccountExpirationTransaction'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of StoreCreditAccountTransaction');
    }
}
