<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectAccess;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilities;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectFieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\StandardMetaobjectDefinitionTemplate;

class MetaobjectDefinition
{
    protected $access;
    protected $capabilities;
    protected $createdByApp;
    protected $createdByStaff;
    protected $description;
    protected $displayNameKey;
    protected $fieldDefinitions;
    protected $hasThumbnailField;
    protected $id;
    protected $metaobjects;
    protected $metaobjectsCount;
    protected $name;
    protected $standardTemplate;
    protected $type;

    
    /**
     * @return MetaobjectAccess
     */
    public function getAccess()
    {
        return $this->access;
    }

    
    /**
     * @return MetaobjectCapabilities
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    
    /**
     * @return App
     */
    public function getCreatedByApp()
    {
        return $this->createdByApp;
    }

    
    /**
     * @return StaffMember
     */
    public function getCreatedByStaff()
    {
        return $this->createdByStaff;
    }

    
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
     * @return MetaobjectFieldDefinition[]
     */
    public function getFieldDefinitions()
    {
        return $this->fieldDefinitions;
    }

    
    /**
     * @return bool
     */
    public function getHasThumbnailField()
    {
        return $this->hasThumbnailField;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MetaobjectConnection
     */
    public function getMetaobjects()
    {
        return $this->metaobjects;
    }

    
    /**
     * @return int
     */
    public function getMetaobjectsCount()
    {
        return $this->metaobjectsCount;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return StandardMetaobjectDefinitionTemplate
     */
    public function getStandardTemplate()
    {
        return $this->standardTemplate;
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
            if (isset($data['access']) && $data['access'] !== null) {
                $instance->access = MetaobjectAccess::fromArray($data['access']);
            }
            if (isset($data['capabilities']) && $data['capabilities'] !== null) {
                $instance->capabilities = MetaobjectCapabilities::fromArray($data['capabilities']);
            }
            if (isset($data['createdByApp']) && $data['createdByApp'] !== null) {
                $instance->createdByApp = App::fromArray($data['createdByApp']);
            }
            if (isset($data['createdByStaff']) && $data['createdByStaff'] !== null) {
                $instance->createdByStaff = StaffMember::fromArray($data['createdByStaff']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['displayNameKey']) && $data['displayNameKey'] !== null) {
                $instance->displayNameKey = $data['displayNameKey'];
            }
            if (isset($data['fieldDefinitions']) && $data['fieldDefinitions'] !== null) {
                $instance->fieldDefinitions = array_map(function($item) { return MetaobjectFieldDefinition::fromArray($item); }, $data['fieldDefinitions']);
            }
            if (isset($data['hasThumbnailField']) && $data['hasThumbnailField'] !== null) {
                $instance->hasThumbnailField = $data['hasThumbnailField'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metaobjects']) && $data['metaobjects'] !== null) {
                $instance->metaobjects = MetaobjectConnection::fromArray($data['metaobjects']);
            }
            if (isset($data['metaobjectsCount']) && $data['metaobjectsCount'] !== null) {
                $instance->metaobjectsCount = $data['metaobjectsCount'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['standardTemplate']) && $data['standardTemplate'] !== null) {
                $instance->standardTemplate = StandardMetaobjectDefinitionTemplate::fromArray($data['standardTemplate']);
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
            if ($this->access !== null) {
                $data['access'] = $this->access->asArray();
            }
            if ($this->capabilities !== null) {
                $data['capabilities'] = $this->capabilities->asArray();
            }
            if ($this->createdByApp !== null) {
                $data['createdByApp'] = $this->createdByApp->asArray();
            }
            if ($this->createdByStaff !== null) {
                $data['createdByStaff'] = $this->createdByStaff->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->displayNameKey !== null) {
                $data['displayNameKey'] = $this->displayNameKey;
            }
            if ($this->fieldDefinitions !== null) {
                $data['fieldDefinitions'] = array_map(function($item) { return $item->asArray(); }, $this->fieldDefinitions);
            }
            if ($this->hasThumbnailField !== null) {
                $data['hasThumbnailField'] = $this->hasThumbnailField;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metaobjects !== null) {
                $data['metaobjects'] = $this->metaobjects->asArray();
            }
            if ($this->metaobjectsCount !== null) {
                $data['metaobjectsCount'] = $this->metaobjectsCount;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->standardTemplate !== null) {
                $data['standardTemplate'] = $this->standardTemplate->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            return $data;
        }
}
