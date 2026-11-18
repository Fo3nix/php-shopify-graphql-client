<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMutationsStagedUploadTargetGenerateUploadParameter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `stagedUploadTargetGenerate` mutation.
 */
class ShopifyStagedUploadTargetGeneratePayload
{
    protected $parameters;
    protected $url;
    protected $userErrors;

    
    /**
     * The signed parameters that can be used to upload the asset.
     *
     * @return ShopifyMutationsStagedUploadTargetGenerateUploadParameter[]
     */
    public function getParameters(): ?array
    {
        return $this->parameters;
    }

    
    /**
     * The signed URL where the asset can be uploaded.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['parameters']) && $data['parameters'] !== null) {
                $instance->parameters = array_map(function($item) { return ShopifyMutationsStagedUploadTargetGenerateUploadParameter::fromArray($item); }, $data['parameters']);
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
