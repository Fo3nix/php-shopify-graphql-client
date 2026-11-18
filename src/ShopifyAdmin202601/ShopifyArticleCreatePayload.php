<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyArticle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyArticleCreateUserError;

/**
 * Return type for `articleCreate` mutation.
 */
class ShopifyArticleCreatePayload
{
    protected $article;
    protected $userErrors;

    
    /**
     * The article that was created.
     *
     * @return ShopifyArticle
     */
    public function getArticle(): ?ShopifyArticle
    {
        return $this->article;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyArticleCreateUserError[]
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
            if (isset($data['article']) && $data['article'] !== null) {
                $instance->article = ShopifyArticle::fromArray($data['article']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyArticleCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->article !== null) {
                $data['article'] = $this->article->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
