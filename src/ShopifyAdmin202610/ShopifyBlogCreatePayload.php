<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyBlog;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyBlogCreateUserError;

/**
 * Return type for `blogCreate` mutation.
 */
class ShopifyBlogCreatePayload
{
    protected $blog;
    protected $userErrors;

    
    /**
     * The blog that was created.
     *
     * @return ShopifyBlog
     */
    public function getBlog(): ?ShopifyBlog
    {
        return $this->blog;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBlogCreateUserError[]
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
            if (isset($data['blog']) && $data['blog'] !== null) {
                $instance->blog = ShopifyBlog::fromArray($data['blog']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBlogCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->blog !== null) {
                $data['blog'] = $this->blog->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
