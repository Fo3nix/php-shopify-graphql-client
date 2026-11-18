<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifySegmentFilterHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySegmentFilter
     */
    public static function fromArray(array $data): ShopifySegmentFilter
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SegmentFilter: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SegmentAssociationFilter':
                return ShopifySegmentAssociationFilter::fromArray($data);
            case 'SegmentBooleanFilter':
                return ShopifySegmentBooleanFilter::fromArray($data);
            case 'SegmentDateFilter':
                return ShopifySegmentDateFilter::fromArray($data);
            case 'SegmentEnumFilter':
                return ShopifySegmentEnumFilter::fromArray($data);
            case 'SegmentEventFilter':
                return ShopifySegmentEventFilter::fromArray($data);
            case 'SegmentFloatFilter':
                return ShopifySegmentFloatFilter::fromArray($data);
            case 'SegmentIntegerFilter':
                return ShopifySegmentIntegerFilter::fromArray($data);
            case 'SegmentStringFilter':
                return ShopifySegmentStringFilter::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SegmentFilter: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySegmentFilter $object
     * @return array
     */
    public static function toArray(ShopifySegmentFilter $object): array
    {
        if ($object instanceof ShopifySegmentAssociationFilter) {
            return ['__typename' => 'SegmentAssociationFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentBooleanFilter) {
            return ['__typename' => 'SegmentBooleanFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentDateFilter) {
            return ['__typename' => 'SegmentDateFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentEnumFilter) {
            return ['__typename' => 'SegmentEnumFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentEventFilter) {
            return ['__typename' => 'SegmentEventFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentFloatFilter) {
            return ['__typename' => 'SegmentFloatFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentIntegerFilter) {
            return ['__typename' => 'SegmentIntegerFilter'] + $object->asArray();
        }
        if ($object instanceof ShopifySegmentStringFilter) {
            return ['__typename' => 'SegmentStringFilter'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SegmentFilter');
    }
}
