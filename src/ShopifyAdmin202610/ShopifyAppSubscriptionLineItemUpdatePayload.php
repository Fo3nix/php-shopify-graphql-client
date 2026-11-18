<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppSubscription;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `appSubscriptionLineItemUpdate` mutation.
 */
class ShopifyAppSubscriptionLineItemUpdatePayload
{
    protected $appSubscription;
    protected $confirmationUrl;
    protected $userErrors;

    
    /**
     * The updated app subscription.
     *
     * @return ShopifyAppSubscription
     */
    public function getAppSubscription(): ?ShopifyAppSubscription
    {
        return $this->appSubscription;
    }

    
    /**
     * The URL where the merchant approves or declines the updated app subscription line item.
     *
     * @return string
     */
    public function getConfirmationUrl(): mixed
    {
        return $this->confirmationUrl;
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
            if (isset($data['appSubscription']) && $data['appSubscription'] !== null) {
                $instance->appSubscription = ShopifyAppSubscription::fromArray($data['appSubscription']);
            }
            if (isset($data['confirmationUrl']) && $data['confirmationUrl'] !== null) {
                $instance->confirmationUrl = $data['confirmationUrl'];
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
            if ($this->appSubscription !== null) {
                $data['appSubscription'] = $this->appSubscription->asArray();
            }
            if ($this->confirmationUrl !== null) {
                $data['confirmationUrl'] = $this->confirmationUrl;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
