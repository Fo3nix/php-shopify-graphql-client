<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetaobject;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetaobjectUserError;

/**
 * Return type for `metaobjectUpdate` mutation.
 */
class ShopifyMetaobjectUpdatePayload
{
    protected $metaobject;
    protected $userErrors;

    
    /**
     * The updated metaobject.
     *
     * @return ShopifyMetaobject
     */
    public function getMetaobject(): ?ShopifyMetaobject
    {
        return $this->metaobject;
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
            if (isset($data['metaobject']) && $data['metaobject'] !== null) {
                $instance->metaobject = ShopifyMetaobject::fromArray($data['metaobject']);
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
            if ($this->metaobject !== null) {
                $data['metaobject'] = $this->metaobject->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
