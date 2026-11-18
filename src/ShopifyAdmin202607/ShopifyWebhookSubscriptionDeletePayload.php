<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;

/**
 * Return type for `webhookSubscriptionDelete` mutation.
 */
class ShopifyWebhookSubscriptionDeletePayload
{
    protected $deletedWebhookSubscriptionId;
    protected $userErrors;

    
    /**
     * The ID of the deleted webhook subscription.
     *
     * @return string
     */
    public function getDeletedWebhookSubscriptionId(): ?string
    {
        return $this->deletedWebhookSubscriptionId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deletedWebhookSubscriptionId']) && $data['deletedWebhookSubscriptionId'] !== null) {
                $instance->deletedWebhookSubscriptionId = $data['deletedWebhookSubscriptionId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedWebhookSubscriptionId !== null) {
                $data['deletedWebhookSubscriptionId'] = $this->deletedWebhookSubscriptionId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
