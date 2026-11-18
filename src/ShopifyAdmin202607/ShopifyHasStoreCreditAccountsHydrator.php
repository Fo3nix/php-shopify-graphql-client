<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyHasStoreCreditAccountsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyHasStoreCreditAccounts
     */
    public static function fromArray(array $data): ShopifyHasStoreCreditAccounts
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate HasStoreCreditAccounts: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CompanyLocation':
                return ShopifyCompanyLocation::fromArray($data);
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate HasStoreCreditAccounts: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyHasStoreCreditAccounts $object
     * @return array
     */
    public static function toArray(ShopifyHasStoreCreditAccounts $object): array
    {
        if ($object instanceof ShopifyCompanyLocation) {
            return ['__typename' => 'CompanyLocation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of HasStoreCreditAccounts');
    }
}
