<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsTarget;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAnalyticsTargetCreateUserError;

/**
 * Return type for `analyticsTargetCreate` mutation.
 */
class ShopifyAnalyticsTargetCreatePayload
{
    protected $analyticsTarget;
    protected $userErrors;

    
    /**
     * The newly created [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     *
     * @return ShopifyAnalyticsTarget
     */
    public function getAnalyticsTarget(): ?ShopifyAnalyticsTarget
    {
        return $this->analyticsTarget;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyAnalyticsTargetCreateUserError[]
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
            if (isset($data['analyticsTarget']) && $data['analyticsTarget'] !== null) {
                $instance->analyticsTarget = ShopifyAnalyticsTarget::fromArray($data['analyticsTarget']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyAnalyticsTargetCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->analyticsTarget !== null) {
                $data['analyticsTarget'] = $this->analyticsTarget->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
