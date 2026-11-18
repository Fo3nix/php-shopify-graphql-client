<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyBlogDeleteUserError;

/**
 * Return type for `blogDelete` mutation.
 */
class ShopifyBlogDeletePayload
{
    protected $deletedBlogId;
    protected $userErrors;

    
    /**
     * The ID of the deleted blog.
     *
     * @return string
     */
    public function getDeletedBlogId(): ?string
    {
        return $this->deletedBlogId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBlogDeleteUserError[]
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
            if (isset($data['deletedBlogId']) && $data['deletedBlogId'] !== null) {
                $instance->deletedBlogId = $data['deletedBlogId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBlogDeleteUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedBlogId !== null) {
                $data['deletedBlogId'] = $this->deletedBlogId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
