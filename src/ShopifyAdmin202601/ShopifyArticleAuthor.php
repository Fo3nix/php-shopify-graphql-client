<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * Represents the author of an article. This object provides the author's full name for attribution purposes.
 *
 * The `ArticleAuthor` is a simple object that contains only the author's name field. When articles are created or updated, the author information is stored and can be displayed alongside the article content.
 *
 * Use the `ArticleAuthor` object to:
 * - Retrieve the author's name for display in article bylines
 * - Show author attribution in article listings
 * - Display who wrote specific content
 *
 * Note: This object only contains the author's full name. It does not include additional author details like bio, email, or social media links.
 */
class ShopifyArticleAuthor
{
    protected $name;

    
    /**
     * The author's full name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
