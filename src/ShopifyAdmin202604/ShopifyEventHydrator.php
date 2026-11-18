<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyEventHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyEvent
     */
    public static function fromArray(array $data): ShopifyEvent
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Event: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'BasicEvent':
                return ShopifyBasicEvent::fromArray($data);
            case 'CommentEvent':
                return ShopifyCommentEvent::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Event: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyEvent $object
     * @return array
     */
    public static function toArray(ShopifyEvent $object): array
    {
        if ($object instanceof ShopifyBasicEvent) {
            return ['__typename' => 'BasicEvent'] + $object->asArray();
        }
        if ($object instanceof ShopifyCommentEvent) {
            return ['__typename' => 'CommentEvent'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Event');
    }
}
