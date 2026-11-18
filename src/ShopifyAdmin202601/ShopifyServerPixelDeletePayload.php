<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyErrorsServerPixelUserError;

/**
 * Return type for `serverPixelDelete` mutation.
 */
class ShopifyServerPixelDeletePayload
{
    protected $deletedServerPixelId;
    protected $userErrors;

    
    /**
     * The ID of the server pixel that was deleted, if one was deleted.
     *
     * @return string
     */
    public function getDeletedServerPixelId(): ?string
    {
        return $this->deletedServerPixelId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyErrorsServerPixelUserError[]
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
            if (isset($data['deletedServerPixelId']) && $data['deletedServerPixelId'] !== null) {
                $instance->deletedServerPixelId = $data['deletedServerPixelId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyErrorsServerPixelUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedServerPixelId !== null) {
                $data['deletedServerPixelId'] = $this->deletedServerPixelId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
