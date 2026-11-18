<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyAppSubscriptionDiscountValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyAppSubscriptionDiscountAmount|ShopifyAppSubscriptionDiscountPercentage
     */
    public static function fromArray(array $data): ShopifyAppSubscriptionDiscountAmount|ShopifyAppSubscriptionDiscountPercentage
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate AppSubscriptionDiscountValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AppSubscriptionDiscountAmount':
                return ShopifyAppSubscriptionDiscountAmount::fromArray($data);
            case 'AppSubscriptionDiscountPercentage':
                return ShopifyAppSubscriptionDiscountPercentage::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate AppSubscriptionDiscountValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyAppSubscriptionDiscountAmount|ShopifyAppSubscriptionDiscountPercentage $object
     * @return array
     */
    public static function toArray(ShopifyAppSubscriptionDiscountAmount|ShopifyAppSubscriptionDiscountPercentage $object): array
    {
        if ($object instanceof ShopifyAppSubscriptionDiscountAmount) {
            return ['__typename' => 'AppSubscriptionDiscountAmount'] + $object->asArray();
        }
        if ($object instanceof ShopifyAppSubscriptionDiscountPercentage) {
            return ['__typename' => 'AppSubscriptionDiscountPercentage'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of AppSubscriptionDiscountValue');
    }
}
