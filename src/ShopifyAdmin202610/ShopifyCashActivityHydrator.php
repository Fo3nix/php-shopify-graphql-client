<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCashActivityHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCashActivity
     */
    public static function fromArray(array $data): ShopifyCashActivity
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CashActivity: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CashAdjustmentActivity':
                return ShopifyCashAdjustmentActivity::fromArray($data);
            case 'CashCountActivity':
                return ShopifyCashCountActivity::fromArray($data);
            case 'CashTransactionActivity':
                return ShopifyCashTransactionActivity::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CashActivity: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCashActivity $object
     * @return array
     */
    public static function toArray(ShopifyCashActivity $object): array
    {
        if ($object instanceof ShopifyCashAdjustmentActivity) {
            return ['__typename' => 'CashAdjustmentActivity'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashCountActivity) {
            return ['__typename' => 'CashCountActivity'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashTransactionActivity) {
            return ['__typename' => 'CashTransactionActivity'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CashActivity');
    }
}
