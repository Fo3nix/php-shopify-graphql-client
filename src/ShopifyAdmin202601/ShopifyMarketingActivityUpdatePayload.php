<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketingActivity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyUserError;

/**
 * Return type for `marketingActivityUpdate` mutation.
 */
class ShopifyMarketingActivityUpdatePayload
{
    protected $marketingActivity;
    protected $redirectPath;
    protected $userErrors;

    
    /**
     * The updated marketing activity.
     *
     * @return ShopifyMarketingActivity
     */
    public function getMarketingActivity(): ?ShopifyMarketingActivity
    {
        return $this->marketingActivity;
    }

    
    /**
     * The redirect path from the embedded editor to the Shopify admin.
     *
     * @return string
     */
    public function getRedirectPath(): ?string
    {
        return $this->redirectPath;
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
            if (isset($data['marketingActivity']) && $data['marketingActivity'] !== null) {
                $instance->marketingActivity = ShopifyMarketingActivity::fromArray($data['marketingActivity']);
            }
            if (isset($data['redirectPath']) && $data['redirectPath'] !== null) {
                $instance->redirectPath = $data['redirectPath'];
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
            if ($this->marketingActivity !== null) {
                $data['marketingActivity'] = $this->marketingActivity->asArray();
            }
            if ($this->redirectPath !== null) {
                $data['redirectPath'] = $this->redirectPath;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
