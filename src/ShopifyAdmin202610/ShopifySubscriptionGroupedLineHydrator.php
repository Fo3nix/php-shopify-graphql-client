<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifySubscriptionGroupedLineHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifySubscriptionLine|ShopifySubscriptionParentLine
     */
    public static function fromArray(array $data): ShopifySubscriptionLine|ShopifySubscriptionParentLine
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate SubscriptionGroupedLine: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'SubscriptionLine':
                return ShopifySubscriptionLine::fromArray($data);
            case 'SubscriptionParentLine':
                return ShopifySubscriptionParentLine::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate SubscriptionGroupedLine: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifySubscriptionLine|ShopifySubscriptionParentLine $object
     * @return array
     */
    public static function toArray(ShopifySubscriptionLine|ShopifySubscriptionParentLine $object): array
    {
        if ($object instanceof ShopifySubscriptionLine) {
            return ['__typename' => 'SubscriptionLine'] + $object->asArray();
        }
        if ($object instanceof ShopifySubscriptionParentLine) {
            return ['__typename' => 'SubscriptionParentLine'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of SubscriptionGroupedLine');
    }
}
