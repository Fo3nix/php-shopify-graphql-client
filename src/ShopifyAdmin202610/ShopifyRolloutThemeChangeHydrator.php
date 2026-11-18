<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyRolloutThemeChangeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyRolloutThemeChange
     */
    public static function fromArray(array $data): ShopifyRolloutThemeChange
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate RolloutThemeChange: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'RolloutThemePublishChange':
                return ShopifyRolloutThemePublishChange::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate RolloutThemeChange: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyRolloutThemeChange $object
     * @return array
     */
    public static function toArray(ShopifyRolloutThemeChange $object): array
    {
        if ($object instanceof ShopifyRolloutThemePublishChange) {
            return ['__typename' => 'RolloutThemePublishChange'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of RolloutThemeChange');
    }
}
