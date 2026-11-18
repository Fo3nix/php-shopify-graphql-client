<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyArticleDeleteUserError;

/**
 * Return type for `articleDelete` mutation.
 */
class ShopifyArticleDeletePayload
{
    protected $deletedArticleId;
    protected $userErrors;

    
    /**
     * The ID of the deleted article.
     *
     * @return string
     */
    public function getDeletedArticleId(): ?string
    {
        return $this->deletedArticleId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyArticleDeleteUserError[]
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
            if (isset($data['deletedArticleId']) && $data['deletedArticleId'] !== null) {
                $instance->deletedArticleId = $data['deletedArticleId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyArticleDeleteUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedArticleId !== null) {
                $data['deletedArticleId'] = $this->deletedArticleId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
