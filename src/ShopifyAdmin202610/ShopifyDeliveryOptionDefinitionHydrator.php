<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyDeliveryOptionDefinitionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDeliveryOptionDefinition
     */
    public static function fromArray(array $data): ShopifyDeliveryOptionDefinition
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DeliveryOptionDefinition: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DeliveryCarrierCalculatedOptionDefinition':
                return ShopifyDeliveryCarrierCalculatedOptionDefinition::fromArray($data);
            case 'DeliveryFlatRateOptionDefinition':
                return ShopifyDeliveryFlatRateOptionDefinition::fromArray($data);
            case 'DeliveryValueBasedOptionDefinition':
                return ShopifyDeliveryValueBasedOptionDefinition::fromArray($data);
            case 'DeliveryWeightBasedOptionDefinition':
                return ShopifyDeliveryWeightBasedOptionDefinition::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DeliveryOptionDefinition: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDeliveryOptionDefinition $object
     * @return array
     */
    public static function toArray(ShopifyDeliveryOptionDefinition $object): array
    {
        if ($object instanceof ShopifyDeliveryCarrierCalculatedOptionDefinition) {
            return ['__typename' => 'DeliveryCarrierCalculatedOptionDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryFlatRateOptionDefinition) {
            return ['__typename' => 'DeliveryFlatRateOptionDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryValueBasedOptionDefinition) {
            return ['__typename' => 'DeliveryValueBasedOptionDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryWeightBasedOptionDefinition) {
            return ['__typename' => 'DeliveryWeightBasedOptionDefinition'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DeliveryOptionDefinition');
    }
}
