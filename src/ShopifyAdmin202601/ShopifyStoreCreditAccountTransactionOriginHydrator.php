<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyStoreCreditAccountTransactionOriginHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyOrderTransaction
     */
    public static function fromArray(array $data): ShopifyOrderTransaction
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate StoreCreditAccountTransactionOrigin: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'OrderTransaction':
                return ShopifyOrderTransaction::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate StoreCreditAccountTransactionOrigin: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyOrderTransaction $object
     * @return array
     */
    public static function toArray(ShopifyOrderTransaction $object): array
    {
        if ($object instanceof ShopifyOrderTransaction) {
            return ['__typename' => 'OrderTransaction'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of StoreCreditAccountTransactionOrigin');
    }
}
