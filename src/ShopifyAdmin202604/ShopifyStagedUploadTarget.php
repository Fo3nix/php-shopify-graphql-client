<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImageUploadParameter;

/**
 * Information about the staged target.
 *
 * Deprecated in favor of
 * [StagedMediaUploadTarget](https://shopify.dev/api/admin-graphql/latest/objects/StagedMediaUploadTarget),
 * which is returned by the
 * [stagedUploadsCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/stagedUploadsCreate).
 */
class ShopifyStagedUploadTarget
{
    protected $parameters;
    protected $url;

    
    /**
     * The parameters of an image to be uploaded.
     *
     * @return ShopifyImageUploadParameter[]
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    
    /**
     * The image URL.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['parameters']) && $data['parameters'] !== null) {
                $instance->parameters = array_map(function($item) { return ShopifyImageUploadParameter::fromArray($item); }, $data['parameters']);
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
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
            if ($this->parameters !== null) {
                $data['parameters'] = array_map(function($item) { return $item->asArray(); }, $this->parameters);
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
