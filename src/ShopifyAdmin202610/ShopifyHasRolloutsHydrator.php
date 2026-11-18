<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyHasRolloutsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyHasRollouts
     */
    public static function fromArray(array $data): ShopifyHasRollouts
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate HasRollouts: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountAutomaticApp':
                return ShopifyDiscountAutomaticApp::fromArray($data);
            case 'DiscountAutomaticBasic':
                return ShopifyDiscountAutomaticBasic::fromArray($data);
            case 'DiscountAutomaticBxgy':
                return ShopifyDiscountAutomaticBxgy::fromArray($data);
            case 'DiscountAutomaticFreeShipping':
                return ShopifyDiscountAutomaticFreeShipping::fromArray($data);
            case 'DiscountCodeApp':
                return ShopifyDiscountCodeApp::fromArray($data);
            case 'DiscountCodeBasic':
                return ShopifyDiscountCodeBasic::fromArray($data);
            case 'DiscountCodeBxgy':
                return ShopifyDiscountCodeBxgy::fromArray($data);
            case 'DiscountCodeFreeShipping':
                return ShopifyDiscountCodeFreeShipping::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate HasRollouts: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyHasRollouts $object
     * @return array
     */
    public static function toArray(ShopifyHasRollouts $object): array
    {
        if ($object instanceof ShopifyDiscountAutomaticApp) {
            return ['__typename' => 'DiscountAutomaticApp'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountAutomaticBasic) {
            return ['__typename' => 'DiscountAutomaticBasic'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountAutomaticBxgy) {
            return ['__typename' => 'DiscountAutomaticBxgy'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountAutomaticFreeShipping) {
            return ['__typename' => 'DiscountAutomaticFreeShipping'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeApp) {
            return ['__typename' => 'DiscountCodeApp'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeBasic) {
            return ['__typename' => 'DiscountCodeBasic'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeBxgy) {
            return ['__typename' => 'DiscountCodeBxgy'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeFreeShipping) {
            return ['__typename' => 'DiscountCodeFreeShipping'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of HasRollouts');
    }
}
