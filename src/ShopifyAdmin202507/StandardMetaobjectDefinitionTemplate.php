<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StandardMetaobjectCapabilityTemplate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StandardMetaobjectDefinitionFieldTemplate;

class StandardMetaobjectDefinitionTemplate
{
    protected $description;
    protected $displayNameKey;
    protected $enabledCapabilities;
    protected $fieldDefinitions;
    protected $name;
    protected $type;

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return string
     */
    public function getDisplayNameKey()
    {
        return $this->displayNameKey;
    }

    
    /**
     * @return StandardMetaobjectCapabilityTemplate[]
     */
    public function getEnabledCapabilities()
    {
        return $this->enabledCapabilities;
    }

    
    /**
     * @return StandardMetaobjectDefinitionFieldTemplate[]
     */
    public function getFieldDefinitions()
    {
        return $this->fieldDefinitions;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['displayNameKey']) && $data['displayNameKey'] !== null) {
                $instance->displayNameKey = $data['displayNameKey'];
            }
            if (isset($data['enabledCapabilities']) && $data['enabledCapabilities'] !== null) {
                $instance->enabledCapabilities = array_map(function($item) { return StandardMetaobjectCapabilityTemplate::fromArray($item); }, $data['enabledCapabilities']);
            }
            if (isset($data['fieldDefinitions']) && $data['fieldDefinitions'] !== null) {
                $instance->fieldDefinitions = array_map(function($item) { return StandardMetaobjectDefinitionFieldTemplate::fromArray($item); }, $data['fieldDefinitions']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->displayNameKey !== null) {
                $data['displayNameKey'] = $this->displayNameKey;
            }
            if ($this->enabledCapabilities !== null) {
                $data['enabledCapabilities'] = array_map(function($item) { return $item->asArray(); }, $this->enabledCapabilities);
            }
            if ($this->fieldDefinitions !== null) {
                $data['fieldDefinitions'] = array_map(function($item) { return $item->asArray(); }, $this->fieldDefinitions);
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
