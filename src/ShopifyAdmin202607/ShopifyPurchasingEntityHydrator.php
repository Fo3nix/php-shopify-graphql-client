<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyPurchasingEntityHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCustomer|ShopifyPurchasingCompany
     */
    public static function fromArray(array $data): ShopifyCustomer|ShopifyPurchasingCompany
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate PurchasingEntity: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'PurchasingCompany':
                return ShopifyPurchasingCompany::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate PurchasingEntity: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCustomer|ShopifyPurchasingCompany $object
     * @return array
     */
    public static function toArray(ShopifyCustomer|ShopifyPurchasingCompany $object): array
    {
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyPurchasingCompany) {
            return ['__typename' => 'PurchasingCompany'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of PurchasingEntity');
    }
}
