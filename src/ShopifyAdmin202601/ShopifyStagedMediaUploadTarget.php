<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStagedUploadParameter;

/**
 * Information about a staged upload target, which should be used to send a request to upload
 * the file.
 *
 * For more information on the upload process, refer to
 * [Upload media to Shopify](https://shopify.dev/apps/online-store/media/products#step-1-upload-media-to-shopify).
 */
class ShopifyStagedMediaUploadTarget
{
    protected $parameters;
    protected $resourceUrl;
    protected $url;

    
    /**
     * Parameters needed to authenticate a request to upload the file.
     *
     * @return ShopifyStagedUploadParameter[]
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    
    /**
     * The URL to be passed as `originalSource` in
     * [CreateMediaInput](https://shopify.dev/api/admin-graphql/latest/input-objects/CreateMediaInput)
     * and [FileCreateInput](https://shopify.dev/api/admin-graphql/2022-04/input-objects/FileCreateInput)
     * for the [productCreateMedia](https://shopify.dev/api/admin-graphql/2022-04/mutations/productCreateMedia)
     * and [fileCreate](https://shopify.dev/api/admin-graphql/2022-04/mutations/fileCreate)
     * mutations.
     *
     * @return string
     */
    public function getResourceUrl(): mixed
    {
        return $this->resourceUrl;
    }

    
    /**
     * The URL to use when sending an request to upload the file. Should be used in conjunction with
     * the parameters field.
     *
     * @return string
     */
    public function getUrl(): mixed
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
                $instance->parameters = array_map(function($item) { return ShopifyStagedUploadParameter::fromArray($item); }, $data['parameters']);
            }
            if (isset($data['resourceUrl']) && $data['resourceUrl'] !== null) {
                $instance->resourceUrl = $data['resourceUrl'];
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
            if ($this->resourceUrl !== null) {
                $data['resourceUrl'] = $this->resourceUrl;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
