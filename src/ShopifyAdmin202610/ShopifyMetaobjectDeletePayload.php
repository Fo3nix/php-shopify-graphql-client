<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetaobjectUserError;

/**
 * Return type for `metaobjectDelete` mutation.
 */
class ShopifyMetaobjectDeletePayload
{
    protected $deletedId;
    protected $userErrors;

    
    /**
     * The ID of the deleted metaobject.
     *
     * @return string
     */
    public function getDeletedId(): ?string
    {
        return $this->deletedId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMetaobjectUserError[]
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
            if (isset($data['deletedId']) && $data['deletedId'] !== null) {
                $instance->deletedId = $data['deletedId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMetaobjectUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedId !== null) {
                $data['deletedId'] = $this->deletedId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
