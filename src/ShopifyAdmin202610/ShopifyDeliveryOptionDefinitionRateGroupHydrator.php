<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyDeliveryOptionDefinitionRateGroupHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDeliveryOptionDefinitionRateGroup
     */
    public static function fromArray(array $data): ShopifyDeliveryOptionDefinitionRateGroup
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DeliveryOptionDefinitionRateGroup: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DeliveryCarrierCalculatedRateGroup':
                return ShopifyDeliveryCarrierCalculatedRateGroup::fromArray($data);
            case 'DeliveryFlatRateGroup':
                return ShopifyDeliveryFlatRateGroup::fromArray($data);
            case 'DeliveryValueBasedRateGroup':
                return ShopifyDeliveryValueBasedRateGroup::fromArray($data);
            case 'DeliveryWeightBasedRateGroup':
                return ShopifyDeliveryWeightBasedRateGroup::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DeliveryOptionDefinitionRateGroup: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDeliveryOptionDefinitionRateGroup $object
     * @return array
     */
    public static function toArray(ShopifyDeliveryOptionDefinitionRateGroup $object): array
    {
        if ($object instanceof ShopifyDeliveryCarrierCalculatedRateGroup) {
            return ['__typename' => 'DeliveryCarrierCalculatedRateGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryFlatRateGroup) {
            return ['__typename' => 'DeliveryFlatRateGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryValueBasedRateGroup) {
            return ['__typename' => 'DeliveryValueBasedRateGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryWeightBasedRateGroup) {
            return ['__typename' => 'DeliveryWeightBasedRateGroup'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DeliveryOptionDefinitionRateGroup');
    }
}
