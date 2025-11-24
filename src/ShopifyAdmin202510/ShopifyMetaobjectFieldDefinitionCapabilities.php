<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetaobjectFieldCapabilityAdminFilterable;

class ShopifyMetaobjectFieldDefinitionCapabilities
{
    protected $adminFilterable;

    
    /**
     * @return ShopifyMetaobjectFieldCapabilityAdminFilterable
     */
    public function getAdminFilterable()
    {
        return $this->adminFilterable;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adminFilterable']) && $data['adminFilterable'] !== null) {
                $instance->adminFilterable = ShopifyMetaobjectFieldCapabilityAdminFilterable::fromArray($data['adminFilterable']);
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
            if ($this->adminFilterable !== null) {
                $data['adminFilterable'] = $this->adminFilterable->asArray();
            }
            return $data;
        }
}
