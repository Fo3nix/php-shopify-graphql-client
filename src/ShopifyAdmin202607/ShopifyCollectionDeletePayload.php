<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShop;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;

/**
 * Return type for `collectionDelete` mutation.
 */
class ShopifyCollectionDeletePayload
{
    protected $deletedCollectionId;
    protected $shop;
    protected $userErrors;

    
    /**
     * The ID of the collection that was deleted. Returns `null` if the collection doesn't exist.
     *
     * @return string
     */
    public function getDeletedCollectionId(): ?string
    {
        return $this->deletedCollectionId;
    }

    
    /**
     * The shop associated with the collection.
     *
     * @return ShopifyShop
     */
    public function getShop(): ?ShopifyShop
    {
        return $this->shop;
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
            if (isset($data['deletedCollectionId']) && $data['deletedCollectionId'] !== null) {
                $instance->deletedCollectionId = $data['deletedCollectionId'];
            }
            if (isset($data['shop']) && $data['shop'] !== null) {
                $instance->shop = ShopifyShop::fromArray($data['shop']);
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
            if ($this->deletedCollectionId !== null) {
                $data['deletedCollectionId'] = $this->deletedCollectionId;
            }
            if ($this->shop !== null) {
                $data['shop'] = $this->shop->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
