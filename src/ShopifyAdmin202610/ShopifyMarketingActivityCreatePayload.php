<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketingActivity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `marketingActivityCreate` mutation.
 */
class ShopifyMarketingActivityCreatePayload
{
    protected $marketingActivity;
    protected $redirectPath;
    protected $userErrors;

    
    /**
     * The created marketing activity.
     *
     * @return ShopifyMarketingActivity
     */
    public function getMarketingActivity(): ?ShopifyMarketingActivity
    {
        return $this->marketingActivity;
    }

    
    /**
     * The path to return back to shopify admin from embedded editor.
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
