<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPubSubWebhookSubscriptionCreateUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyWebhookSubscription;

/**
 * Return type for `pubSubWebhookSubscriptionCreate` mutation.
 */
class ShopifyPubSubWebhookSubscriptionCreatePayload
{
    protected $userErrors;
    protected $webhookSubscription;

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyPubSubWebhookSubscriptionCreateUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

    
    /**
     * The webhook subscription that was created.
     *
     * @return ShopifyWebhookSubscription
     */
    public function getWebhookSubscription(): ?ShopifyWebhookSubscription
    {
        return $this->webhookSubscription;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyPubSubWebhookSubscriptionCreateUserError::fromArray($item); }, $data['userErrors']);
            }
            if (isset($data['webhookSubscription']) && $data['webhookSubscription'] !== null) {
                $instance->webhookSubscription = ShopifyWebhookSubscription::fromArray($data['webhookSubscription']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            if ($this->webhookSubscription !== null) {
                $data['webhookSubscription'] = $this->webhookSubscription->asArray();
            }
            return $data;
        }
}
