<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyReverseDeliveryDeliverableHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyReverseDeliveryShippingDeliverable
     */
    public static function fromArray(array $data): ShopifyReverseDeliveryShippingDeliverable
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate ReverseDeliveryDeliverable: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'ReverseDeliveryShippingDeliverable':
                return ShopifyReverseDeliveryShippingDeliverable::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate ReverseDeliveryDeliverable: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyReverseDeliveryShippingDeliverable $object
     * @return array
     */
    public static function toArray(ShopifyReverseDeliveryShippingDeliverable $object): array
    {
        if ($object instanceof ShopifyReverseDeliveryShippingDeliverable) {
            return ['__typename' => 'ReverseDeliveryShippingDeliverable'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of ReverseDeliveryDeliverable');
    }
}
