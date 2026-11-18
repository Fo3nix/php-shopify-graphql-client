<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyCashManagementReasonCodeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCashManagementCustomReasonCode|ShopifyCashManagementDefaultReasonCode|ShopifyCashManagementSystemReasonCode
     */
    public static function fromArray(array $data): ShopifyCashManagementCustomReasonCode|ShopifyCashManagementDefaultReasonCode|ShopifyCashManagementSystemReasonCode
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CashManagementReasonCode: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CashManagementCustomReasonCode':
                return ShopifyCashManagementCustomReasonCode::fromArray($data);
            case 'CashManagementDefaultReasonCode':
                return ShopifyCashManagementDefaultReasonCode::fromArray($data);
            case 'CashManagementSystemReasonCode':
                return ShopifyCashManagementSystemReasonCode::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CashManagementReasonCode: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCashManagementCustomReasonCode|ShopifyCashManagementDefaultReasonCode|ShopifyCashManagementSystemReasonCode $object
     * @return array
     */
    public static function toArray(ShopifyCashManagementCustomReasonCode|ShopifyCashManagementDefaultReasonCode|ShopifyCashManagementSystemReasonCode $object): array
    {
        if ($object instanceof ShopifyCashManagementCustomReasonCode) {
            return ['__typename' => 'CashManagementCustomReasonCode'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashManagementDefaultReasonCode) {
            return ['__typename' => 'CashManagementDefaultReasonCode'] + $object->asArray();
        }
        if ($object instanceof ShopifyCashManagementSystemReasonCode) {
            return ['__typename' => 'CashManagementSystemReasonCode'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CashManagementReasonCode');
    }
}
