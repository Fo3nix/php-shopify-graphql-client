<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetaobjectCapabilityData;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetaobjectDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetaobjectField;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMetafieldRelationConnection;
use Carbon\Carbon;

class ShopifyMetaobject
{
    protected $capabilities;
    protected $createdBy;
    protected $createdByApp;
    protected $createdByStaff;
    protected $definition;
    protected $displayName;
    protected $field;
    protected $fields;
    protected $handle;
    protected $id;
    protected $referencedBy;
    protected $staffMember;
    protected $thumbnailField;
    protected $type;
    protected $updatedAt;

    
    /**
     * @return ShopifyMetaobjectCapabilityData
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    
    /**
     * @return ShopifyApp
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    
    /**
     * @return ShopifyApp
     */
    public function getCreatedByApp()
    {
        return $this->createdByApp;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getCreatedByStaff()
    {
        return $this->createdByStaff;
    }

    
    /**
     * @return ShopifyMetaobjectDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return ShopifyMetaobjectField
     */
    public function getField()
    {
        return $this->field;
    }

    
    /**
     * @return ShopifyMetaobjectField[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyMetafieldRelationConnection
     */
    public function getReferencedBy()
    {
        return $this->referencedBy;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    
    /**
     * @return ShopifyMetaobjectField
     */
    public function getThumbnailField()
    {
        return $this->thumbnailField;
    }

    
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['capabilities']) && $data['capabilities'] !== null) {
                $instance->capabilities = ShopifyMetaobjectCapabilityData::fromArray($data['capabilities']);
            }
            if (isset($data['createdBy']) && $data['createdBy'] !== null) {
                $instance->createdBy = ShopifyApp::fromArray($data['createdBy']);
            }
            if (isset($data['createdByApp']) && $data['createdByApp'] !== null) {
                $instance->createdByApp = ShopifyApp::fromArray($data['createdByApp']);
            }
            if (isset($data['createdByStaff']) && $data['createdByStaff'] !== null) {
                $instance->createdByStaff = ShopifyStaffMember::fromArray($data['createdByStaff']);
            }
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = ShopifyMetaobjectDefinition::fromArray($data['definition']);
            }
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['field']) && $data['field'] !== null) {
                $instance->field = ShopifyMetaobjectField::fromArray($data['field']);
            }
            if (isset($data['fields']) && $data['fields'] !== null) {
                $instance->fields = array_map(function($item) { return ShopifyMetaobjectField::fromArray($item); }, $data['fields']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['referencedBy']) && $data['referencedBy'] !== null) {
                $instance->referencedBy = ShopifyMetafieldRelationConnection::fromArray($data['referencedBy']);
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
            }
            if (isset($data['thumbnailField']) && $data['thumbnailField'] !== null) {
                $instance->thumbnailField = ShopifyMetaobjectField::fromArray($data['thumbnailField']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->capabilities !== null) {
                $data['capabilities'] = $this->capabilities->asArray();
            }
            if ($this->createdBy !== null) {
                $data['createdBy'] = $this->createdBy->asArray();
            }
            if ($this->createdByApp !== null) {
                $data['createdByApp'] = $this->createdByApp->asArray();
            }
            if ($this->createdByStaff !== null) {
                $data['createdByStaff'] = $this->createdByStaff->asArray();
            }
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->field !== null) {
                $data['field'] = $this->field->asArray();
            }
            if ($this->fields !== null) {
                $data['fields'] = array_map(function($item) { return $item->asArray(); }, $this->fields);
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->referencedBy !== null) {
                $data['referencedBy'] = $this->referencedBy->asArray();
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            if ($this->thumbnailField !== null) {
                $data['thumbnailField'] = $this->thumbnailField->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
