<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A permission that controls access to [GraphQL Admin API](https://shopify.dev/docs/api/usage/access-scopes#authenticated-access-scopes) or [Storefront API](https://shopify.dev/docs/api/usage/access-scopes#unauthenticated-access-scopes) types. Each scope defines what data an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) can read or write, following the format `{action}_{resource}` where action is typically "read" or "write".
 *
 * Apps declare required and optional access scopes in their configuration. During installation, merchants review and grant these permissions, determining what shop data the app can access. The granted scopes remain active until the merchant uninstalls the app or revokes them. Apps can programmatically revoke their own dynamically granted optional scopes using [`appRevokeAccessScopes`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/appRevokeAccessScopes).
 */
class ShopifyAccessScope
{
    protected $description;
    protected $handle;

    
    /**
     * A description of the actions that the access scope allows an app to perform.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * A readable string that represents the access scope. The string usually follows the format `{action}_{resource}`. `{action}` is `read` or `write`, and `{resource}` is the resource that the action can be performed on. `{action}` and `{resource}` are separated by an underscore. For example, `read_orders` or `write_products`.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            return $data;
        }
}
