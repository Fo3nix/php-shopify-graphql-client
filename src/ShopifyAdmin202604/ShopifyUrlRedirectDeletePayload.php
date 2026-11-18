<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUrlRedirectUserError;

/**
 * Return type for `urlRedirectDelete` mutation.
 */
class ShopifyUrlRedirectDeletePayload
{
    protected $deletedUrlRedirectId;
    protected $userErrors;

    
    /**
     * The ID of the deleted redirect.
     *
     * @return string
     */
    public function getDeletedUrlRedirectId(): ?string
    {
        return $this->deletedUrlRedirectId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUrlRedirectUserError[]
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
            if (isset($data['deletedUrlRedirectId']) && $data['deletedUrlRedirectId'] !== null) {
                $instance->deletedUrlRedirectId = $data['deletedUrlRedirectId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUrlRedirectUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedUrlRedirectId !== null) {
                $data['deletedUrlRedirectId'] = $this->deletedUrlRedirectId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
