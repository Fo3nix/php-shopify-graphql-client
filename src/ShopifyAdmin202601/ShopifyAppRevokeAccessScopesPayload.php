<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAccessScope;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAppRevokeAccessScopesAppRevokeScopeError;

/**
 * Return type for `appRevokeAccessScopes` mutation.
 */
class ShopifyAppRevokeAccessScopesPayload
{
    protected $revoked;
    protected $userErrors;

    
    /**
     * The list of scope handles that have been revoked.
     *
     * @return ShopifyAccessScope[]
     */
    public function getRevoked(): ?array
    {
        return $this->revoked;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyAppRevokeAccessScopesAppRevokeScopeError[]
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
            if (isset($data['revoked']) && $data['revoked'] !== null) {
                $instance->revoked = array_map(function($item) { return ShopifyAccessScope::fromArray($item); }, $data['revoked']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyAppRevokeAccessScopesAppRevokeScopeError::fromArray($item); }, $data['userErrors']);
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
            if ($this->revoked !== null) {
                $data['revoked'] = array_map(function($item) { return $item->asArray(); }, $this->revoked);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
