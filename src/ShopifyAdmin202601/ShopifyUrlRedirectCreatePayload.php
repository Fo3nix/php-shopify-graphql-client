<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyUrlRedirect;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyUrlRedirectUserError;

/**
 * Return type for `urlRedirectCreate` mutation.
 */
class ShopifyUrlRedirectCreatePayload
{
    protected $urlRedirect;
    protected $userErrors;

    
    /**
     * The created redirect.
     *
     * @return ShopifyUrlRedirect
     */
    public function getUrlRedirect(): ?ShopifyUrlRedirect
    {
        return $this->urlRedirect;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUrlRedirectUserError[]
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
            if (isset($data['urlRedirect']) && $data['urlRedirect'] !== null) {
                $instance->urlRedirect = ShopifyUrlRedirect::fromArray($data['urlRedirect']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUrlRedirectUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->urlRedirect !== null) {
                $data['urlRedirect'] = $this->urlRedirect->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
