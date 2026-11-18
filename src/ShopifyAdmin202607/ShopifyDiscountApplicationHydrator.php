<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyDiscountApplicationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountApplication
     */
    public static function fromArray(array $data): ShopifyDiscountApplication
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountApplication: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AutomaticDiscountApplication':
                return ShopifyAutomaticDiscountApplication::fromArray($data);
            case 'DiscountCodeApplication':
                return ShopifyDiscountCodeApplication::fromArray($data);
            case 'ManualDiscountApplication':
                return ShopifyManualDiscountApplication::fromArray($data);
            case 'ScriptDiscountApplication':
                return ShopifyScriptDiscountApplication::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountApplication: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountApplication $object
     * @return array
     */
    public static function toArray(ShopifyDiscountApplication $object): array
    {
        if ($object instanceof ShopifyAutomaticDiscountApplication) {
            return ['__typename' => 'AutomaticDiscountApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeApplication) {
            return ['__typename' => 'DiscountCodeApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyManualDiscountApplication) {
            return ['__typename' => 'ManualDiscountApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyScriptDiscountApplication) {
            return ['__typename' => 'ScriptDiscountApplication'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountApplication');
    }
}
