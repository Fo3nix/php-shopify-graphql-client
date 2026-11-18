<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Individual Google Cloud Pub/Sub topics that receive webhook events for reliable, asynchronous processing. This endpoint type lets your app tap into Google Cloud's messaging infrastructure to handle events at scale.
 *
 * For example, when inventory levels change, Shopify can publish these events to your Pub/Sub topic `projects/your-project/topics/inventory-updates`, allowing your Google Cloud functions or services to process inventory changes at their own pace.
 *
 * Pub/Sub endpoints provide reliable message delivery to Google Cloud Pub/Sub, making them excellent for apps that need to handle variable webhook volumes or integrate with Google Cloud Platform services.
 *
 * Learn more about [Pub/Sub webhook configuration](https://shopify.dev/docs/apps/build/webhooks/subscribe/get-started).
 */
class ShopifyWebhookPubSubEndpoint
{
    protected $pubSubProject;
    protected $pubSubTopic;

    
    /**
     * The Google Cloud Pub/Sub project ID.
     *
     * @return string
     */
    public function getPubSubProject(): ?string
    {
        return $this->pubSubProject;
    }

    
    /**
     * The Google Cloud Pub/Sub topic ID.
     *
     * @return string
     */
    public function getPubSubTopic(): ?string
    {
        return $this->pubSubTopic;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['pubSubProject']) && $data['pubSubProject'] !== null) {
                $instance->pubSubProject = $data['pubSubProject'];
            }
            if (isset($data['pubSubTopic']) && $data['pubSubTopic'] !== null) {
                $instance->pubSubTopic = $data['pubSubTopic'];
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
            if ($this->pubSubProject !== null) {
                $data['pubSubProject'] = $this->pubSubProject;
            }
            if ($this->pubSubTopic !== null) {
                $data['pubSubTopic'] = $this->pubSubTopic;
            }
            return $data;
        }
}
