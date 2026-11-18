<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketUserError;

/**
 * Return type for `marketRegionsDelete` mutation.
 */
class ShopifyMarketRegionsDeletePayload
{
    protected $deletedIds;
    protected $userErrors;

    
    /**
     * The ID of the deleted market region.
     *
     * @return string[]
     */
    public function getDeletedIds(): ?array
    {
        return $this->deletedIds;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMarketUserError[]
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
            if (isset($data['deletedIds']) && $data['deletedIds'] !== null) {
                $instance->deletedIds = $data['deletedIds'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMarketUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedIds !== null) {
                $data['deletedIds'] = $this->deletedIds;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
