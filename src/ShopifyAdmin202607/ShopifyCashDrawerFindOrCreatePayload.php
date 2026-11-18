<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashDrawer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashDrawerFindOrCreateUserError;

/**
 * Return type for `cashDrawerFindOrCreate` mutation.
 */
class ShopifyCashDrawerFindOrCreatePayload
{
    protected $cashDrawer;
    protected $userErrors;

    
    /**
     * The cash drawer.
     *
     * @return ShopifyCashDrawer
     */
    public function getCashDrawer(): ?ShopifyCashDrawer
    {
        return $this->cashDrawer;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCashDrawerFindOrCreateUserError[]
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
            if (isset($data['cashDrawer']) && $data['cashDrawer'] !== null) {
                $instance->cashDrawer = ShopifyCashDrawer::fromArray($data['cashDrawer']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCashDrawerFindOrCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->cashDrawer !== null) {
                $data['cashDrawer'] = $this->cashDrawer->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
