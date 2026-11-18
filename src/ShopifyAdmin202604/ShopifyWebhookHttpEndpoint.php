<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * An HTTPS endpoint that receives webhook events as POST requests, letting your app respond to Shopify events in real-time. This is the most common webhook endpoint type, allowing apps to process Shopify events through standard HTTP callbacks.
 *
 * For example, when setting up order notifications, your app would provide an HTTPS URL like `https://yourapp.com/webhooks/orders/create` to receive order creation events as JSON payloads.
 *
 * HTTP endpoints offer straightforward webhook integration with immediate event delivery, making them suitable for apps that need real-time notifications without complex infrastructure requirements.
 *
 * Learn more about [HTTP webhook configuration](https://shopify.dev/docs/apps/build/webhooks/subscribe/https).
 */
class ShopifyWebhookHttpEndpoint
{
    protected $callbackUrl;

    
    /**
     * The URL to which the webhooks events are sent.
     *
     * @return string
     */
    public function getCallbackUrl(): mixed
    {
        return $this->callbackUrl;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['callbackUrl']) && $data['callbackUrl'] !== null) {
                $instance->callbackUrl = $data['callbackUrl'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->callbackUrl !== null) {
                $data['callbackUrl'] = $this->callbackUrl;
            }
            return $data;
        }
}
