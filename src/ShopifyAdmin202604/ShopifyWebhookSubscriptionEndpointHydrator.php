<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyWebhookSubscriptionEndpointHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyWebhookEventBridgeEndpoint|ShopifyWebhookHttpEndpoint|ShopifyWebhookPubSubEndpoint
     */
    public static function fromArray(array $data): ShopifyWebhookEventBridgeEndpoint|ShopifyWebhookHttpEndpoint|ShopifyWebhookPubSubEndpoint
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate WebhookSubscriptionEndpoint: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'WebhookEventBridgeEndpoint':
                return ShopifyWebhookEventBridgeEndpoint::fromArray($data);
            case 'WebhookHttpEndpoint':
                return ShopifyWebhookHttpEndpoint::fromArray($data);
            case 'WebhookPubSubEndpoint':
                return ShopifyWebhookPubSubEndpoint::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate WebhookSubscriptionEndpoint: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyWebhookEventBridgeEndpoint|ShopifyWebhookHttpEndpoint|ShopifyWebhookPubSubEndpoint $object
     * @return array
     */
    public static function toArray(ShopifyWebhookEventBridgeEndpoint|ShopifyWebhookHttpEndpoint|ShopifyWebhookPubSubEndpoint $object): array
    {
        if ($object instanceof ShopifyWebhookEventBridgeEndpoint) {
            return ['__typename' => 'WebhookEventBridgeEndpoint'] + $object->asArray();
        }
        if ($object instanceof ShopifyWebhookHttpEndpoint) {
            return ['__typename' => 'WebhookHttpEndpoint'] + $object->asArray();
        }
        if ($object instanceof ShopifyWebhookPubSubEndpoint) {
            return ['__typename' => 'WebhookPubSubEndpoint'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of WebhookSubscriptionEndpoint');
    }
}
