<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyRolloutCatalogChangeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyRolloutCatalogChange
     */
    public static function fromArray(array $data): ShopifyRolloutCatalogChange
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate RolloutCatalogChange: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'RolloutCatalogActivateChange':
                return ShopifyRolloutCatalogActivateChange::fromArray($data);
            case 'RolloutCatalogDraftChange':
                return ShopifyRolloutCatalogDraftChange::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate RolloutCatalogChange: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyRolloutCatalogChange $object
     * @return array
     */
    public static function toArray(ShopifyRolloutCatalogChange $object): array
    {
        if ($object instanceof ShopifyRolloutCatalogActivateChange) {
            return ['__typename' => 'RolloutCatalogActivateChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutCatalogDraftChange) {
            return ['__typename' => 'RolloutCatalogDraftChange'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of RolloutCatalogChange');
    }
}
