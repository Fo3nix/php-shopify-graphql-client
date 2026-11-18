<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyMarketRegionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyMarketRegion
     */
    public static function fromArray(array $data): ShopifyMarketRegion
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate MarketRegion: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'MarketRegionCountry':
                return ShopifyMarketRegionCountry::fromArray($data);
            case 'MarketRegionSubdivision':
                return ShopifyMarketRegionSubdivision::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate MarketRegion: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyMarketRegion $object
     * @return array
     */
    public static function toArray(ShopifyMarketRegion $object): array
    {
        if ($object instanceof ShopifyMarketRegionCountry) {
            return ['__typename' => 'MarketRegionCountry'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketRegionSubdivision) {
            return ['__typename' => 'MarketRegionSubdivision'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of MarketRegion');
    }
}
