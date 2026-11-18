<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyHasLocalizationExtensionsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyHasLocalizationExtensions
     */
    public static function fromArray(array $data): ShopifyHasLocalizationExtensions
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate HasLocalizationExtensions: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DraftOrder':
                return ShopifyDraftOrder::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate HasLocalizationExtensions: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyHasLocalizationExtensions $object
     * @return array
     */
    public static function toArray(ShopifyHasLocalizationExtensions $object): array
    {
        if ($object instanceof ShopifyDraftOrder) {
            return ['__typename' => 'DraftOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of HasLocalizationExtensions');
    }
}
