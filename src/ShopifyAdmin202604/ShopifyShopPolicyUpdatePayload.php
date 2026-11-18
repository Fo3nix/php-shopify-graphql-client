<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopPolicyUserError;

/**
 * Return type for `shopPolicyUpdate` mutation.
 */
class ShopifyShopPolicyUpdatePayload
{
    protected $shopPolicy;
    protected $userErrors;

    
    /**
     * The shop policy that has been updated.
     *
     * @return ShopifyShopPolicy
     */
    public function getShopPolicy(): ?ShopifyShopPolicy
    {
        return $this->shopPolicy;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyShopPolicyUserError[]
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
            if (isset($data['shopPolicy']) && $data['shopPolicy'] !== null) {
                $instance->shopPolicy = ShopifyShopPolicy::fromArray($data['shopPolicy']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyShopPolicyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->shopPolicy !== null) {
                $data['shopPolicy'] = $this->shopPolicy->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
