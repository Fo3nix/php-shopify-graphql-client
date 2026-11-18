<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStandardMetaobjectCapabilityTemplate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStandardMetaobjectDefinitionFieldTemplate;

/**
 * Standard metaobject definition templates provide preset configurations to create metaobject definitions.
 */
class ShopifyStandardMetaobjectDefinitionTemplate
{
    protected $description;
    protected $displayNameKey;
    protected $enabledCapabilities;
    protected $fieldDefinitions;
    protected $name;
    protected $type;

    
    /**
     * The administrative description.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The key of a field to reference as the display name for each object.
     *
     * @return string
     */
    public function getDisplayNameKey(): ?string
    {
        return $this->displayNameKey;
    }

    
    /**
     * The capabilities of the metaobject definition.
     *
     * @return ShopifyStandardMetaobjectCapabilityTemplate[]
     */
    public function getEnabledCapabilities(): ?array
    {
        return $this->enabledCapabilities;
    }

    
    /**
     * Templates for the associated field definitions.
     *
     * @return ShopifyStandardMetaobjectDefinitionFieldTemplate[]
     */
    public function getFieldDefinitions(): ?array
    {
        return $this->fieldDefinitions;
    }

    
    /**
     * The human-readable name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The namespace owned by the definition after the definition has been enabled.
     *
     * @return string
     */
    public function getType(): ?string
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
                $instance->enabledCapabilities = array_map(function($item) { return ShopifyStandardMetaobjectCapabilityTemplate::fromArray($item); }, $data['enabledCapabilities']);
            }
            if (isset($data['fieldDefinitions']) && $data['fieldDefinitions'] !== null) {
                $instance->fieldDefinitions = array_map(function($item) { return ShopifyStandardMetaobjectDefinitionFieldTemplate::fromArray($item); }, $data['fieldDefinitions']);
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
