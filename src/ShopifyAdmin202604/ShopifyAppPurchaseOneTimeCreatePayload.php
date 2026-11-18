<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyAppPurchaseOneTime;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `appPurchaseOneTimeCreate` mutation.
 */
class ShopifyAppPurchaseOneTimeCreatePayload
{
    protected $appPurchaseOneTime;
    protected $confirmationUrl;
    protected $userErrors;

    
    /**
     * The newly created app one-time purchase.
     *
     * @return ShopifyAppPurchaseOneTime
     */
    public function getAppPurchaseOneTime(): ?ShopifyAppPurchaseOneTime
    {
        return $this->appPurchaseOneTime;
    }

    
    /**
     * The URL that the merchant can access to approve or decline the newly created app one-time purchase.
     *
     * If the merchant declines, then the merchant is redirected to the app and receives a notification message stating that the charge was declined.
     * If the merchant approves and they're successfully invoiced, then the state of the charge changes from `pending` to `active`.
     *
     * You get paid after the charge is activated.
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
            if (isset($data['appPurchaseOneTime']) && $data['appPurchaseOneTime'] !== null) {
                $instance->appPurchaseOneTime = ShopifyAppPurchaseOneTime::fromArray($data['appPurchaseOneTime']);
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
            if ($this->appPurchaseOneTime !== null) {
                $data['appPurchaseOneTime'] = $this->appPurchaseOneTime->asArray();
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
