<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyDeliveryPromiseParticipantOwnerHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyProductVariant
     */
    public static function fromArray(array $data): ShopifyProductVariant
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DeliveryPromiseParticipantOwner: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DeliveryPromiseParticipantOwner: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyProductVariant $object
     * @return array
     */
    public static function toArray(ShopifyProductVariant $object): array
    {
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DeliveryPromiseParticipantOwner');
    }
}
