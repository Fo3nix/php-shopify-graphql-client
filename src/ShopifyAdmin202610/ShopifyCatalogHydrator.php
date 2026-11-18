<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCatalogHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCatalog
     */
    public static function fromArray(array $data): ShopifyCatalog
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Catalog: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AppCatalog':
                return ShopifyAppCatalog::fromArray($data);
            case 'CompanyLocationCatalog':
                return ShopifyCompanyLocationCatalog::fromArray($data);
            case 'MarketCatalog':
                return ShopifyMarketCatalog::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Catalog: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCatalog $object
     * @return array
     */
    public static function toArray(ShopifyCatalog $object): array
    {
        if ($object instanceof ShopifyAppCatalog) {
            return ['__typename' => 'AppCatalog'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocationCatalog) {
            return ['__typename' => 'CompanyLocationCatalog'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketCatalog) {
            return ['__typename' => 'MarketCatalog'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Catalog');
    }
}
