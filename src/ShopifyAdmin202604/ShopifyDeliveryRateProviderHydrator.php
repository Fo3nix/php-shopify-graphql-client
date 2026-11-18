<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyDeliveryRateProviderHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDeliveryParticipant|ShopifyDeliveryRateDefinition
     */
    public static function fromArray(array $data): ShopifyDeliveryParticipant|ShopifyDeliveryRateDefinition
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DeliveryRateProvider: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DeliveryParticipant':
                return ShopifyDeliveryParticipant::fromArray($data);
            case 'DeliveryRateDefinition':
                return ShopifyDeliveryRateDefinition::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DeliveryRateProvider: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDeliveryParticipant|ShopifyDeliveryRateDefinition $object
     * @return array
     */
    public static function toArray(ShopifyDeliveryParticipant|ShopifyDeliveryRateDefinition $object): array
    {
        if ($object instanceof ShopifyDeliveryParticipant) {
            return ['__typename' => 'DeliveryParticipant'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryRateDefinition) {
            return ['__typename' => 'DeliveryRateDefinition'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DeliveryRateProvider');
    }
}
