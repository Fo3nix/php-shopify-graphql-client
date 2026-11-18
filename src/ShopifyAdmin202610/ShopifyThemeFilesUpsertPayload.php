<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOnlineStoreThemeFileOperationResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyOnlineStoreThemeFilesUserErrors;

/**
 * Return type for `themeFilesUpsert` mutation.
 */
class ShopifyThemeFilesUpsertPayload
{
    protected $job;
    protected $upsertedThemeFiles;
    protected $userErrors;

    
    /**
     * The theme files write job triggered by the mutation.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
    }

    
    /**
     * The resulting theme files.
     *
     * @return ShopifyOnlineStoreThemeFileOperationResult[]
     */
    public function getUpsertedThemeFiles(): ?array
    {
        return $this->upsertedThemeFiles;
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
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
            }
            if (isset($data['upsertedThemeFiles']) && $data['upsertedThemeFiles'] !== null) {
                $instance->upsertedThemeFiles = array_map(function($item) { return ShopifyOnlineStoreThemeFileOperationResult::fromArray($item); }, $data['upsertedThemeFiles']);
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
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            if ($this->upsertedThemeFiles !== null) {
                $data['upsertedThemeFiles'] = array_map(function($item) { return $item->asArray(); }, $this->upsertedThemeFiles);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
