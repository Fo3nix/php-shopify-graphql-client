<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilityDefinitionDataOnlineStore;

class MetaobjectCapabilitiesOnlineStore
{
    protected $data;
    protected $enabled;

    
    /**
     * @return MetaobjectCapabilityDefinitionDataOnlineStore
     */
    public function getData()
    {
        return $this->data;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['data']) && $data['data'] !== null) {
                $instance->data = MetaobjectCapabilityDefinitionDataOnlineStore::fromArray($data['data']);
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
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
            if ($this->data !== null) {
                $data['data'] = $this->data->asArray();
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            return $data;
        }
}
