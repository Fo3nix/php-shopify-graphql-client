<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFileHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFile;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyFilesUserError;

/**
 * Return type for `fileAcknowledgeUpdateFailed` mutation.
 */
class ShopifyFileAcknowledgeUpdateFailedPayload
{
    protected $files;
    protected $userErrors;

    
    /**
     * The updated file(s).
     *
     * @return ShopifyFile[]
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyFilesUserError[]
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
            if (isset($data['files']) && $data['files'] !== null) {
                $instance->files = array_map(function($item) { return ShopifyFileHydrator::fromArray($item); }, $data['files']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyFilesUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->files !== null) {
                $data['files'] = array_map(function($item) { return ShopifyFileHydrator::toArray($item); }, $this->files);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
