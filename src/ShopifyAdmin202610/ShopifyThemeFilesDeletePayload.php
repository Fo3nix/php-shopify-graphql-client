<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOnlineStoreThemeFileOperationResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOnlineStoreThemeFilesUserErrors;

/**
 * Return type for `themeFilesDelete` mutation.
 */
class ShopifyThemeFilesDeletePayload
{
    protected $deletedThemeFiles;
    protected $userErrors;

    
    /**
     * The resulting theme files.
     *
     * @return ShopifyOnlineStoreThemeFileOperationResult[]
     */
    public function getDeletedThemeFiles(): ?array
    {
        return $this->deletedThemeFiles;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyOnlineStoreThemeFilesUserErrors[]
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
            if (isset($data['deletedThemeFiles']) && $data['deletedThemeFiles'] !== null) {
                $instance->deletedThemeFiles = array_map(function($item) { return ShopifyOnlineStoreThemeFileOperationResult::fromArray($item); }, $data['deletedThemeFiles']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyOnlineStoreThemeFilesUserErrors::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedThemeFiles !== null) {
                $data['deletedThemeFiles'] = array_map(function($item) { return $item->asArray(); }, $this->deletedThemeFiles);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
