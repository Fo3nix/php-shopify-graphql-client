<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Connects your app to Amazon EventBridge so you can receive Shopify webhook events and process them through AWS's event-driven architecture. This gives you enterprise-grade scalability and lets you tap into the full AWS ecosystem for handling webhook traffic.
 *
 * For example, when a customer places an order, Shopify can publish the order creation event directly to your EventBridge partner source, allowing your AWS infrastructure to process the event through Lambda functions, SQS queues, or other AWS services.
 *
 * EventBridge endpoints provide enterprise-grade event routing and processing capabilities, making them ideal for apps that need to handle high-volume webhook traffic or integrate deeply with AWS services.
 *
 * Learn more about [webhook endpoints](https://shopify.dev/docs/apps/build/webhooks/subscribe/get-started).
 */
class ShopifyWebhookEventBridgeEndpoint
{
    protected $arn;

    
    /**
     * The ARN of this EventBridge partner event source.
     *
     * @return string
     */
    public function getArn(): mixed
    {
        return $this->arn;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['arn']) && $data['arn'] !== null) {
                $instance->arn = $data['arn'];
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
            if ($this->arn !== null) {
                $data['arn'] = $this->arn;
            }
            return $data;
        }
}
