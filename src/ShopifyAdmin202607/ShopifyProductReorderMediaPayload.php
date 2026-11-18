<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyJob;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMediaUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;

/**
 * Return type for `productReorderMedia` mutation.
 */
class ShopifyProductReorderMediaPayload
{
    protected $job;
    protected $mediaUserErrors;
    protected $userErrors;

    
    /**
     * The asynchronous job which reorders the media.
     *
     * @return ShopifyJob
     */
    public function getJob(): ?ShopifyJob
    {
        return $this->job;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMediaUserError[]
     */
    public function getMediaUserErrors(): ?array
    {
        return $this->mediaUserErrors;
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
            if (isset($data['job']) && $data['job'] !== null) {
                $instance->job = ShopifyJob::fromArray($data['job']);
            }
            if (isset($data['mediaUserErrors']) && $data['mediaUserErrors'] !== null) {
                $instance->mediaUserErrors = array_map(function($item) { return ShopifyMediaUserError::fromArray($item); }, $data['mediaUserErrors']);
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
            if ($this->job !== null) {
                $data['job'] = $this->job->asArray();
            }
            if ($this->mediaUserErrors !== null) {
                $data['mediaUserErrors'] = array_map(function($item) { return $item->asArray(); }, $this->mediaUserErrors);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
