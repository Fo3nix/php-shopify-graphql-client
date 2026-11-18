<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetaobjectCapabilityData;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetaobjectDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetaobjectField;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldRelationConnection;

/**
 * An instance of custom structured data defined by a [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition). [Metaobjects](https://shopify.dev/docs/apps/build/custom-data#what-are-metaobjects) store reusable data that extends beyond Shopify's standard resources, such as product highlights, size charts, or custom content sections.
 *
 * Each metaobject includes fields that match the field types and validation rules specified in its definition, which also determines the metaobject's capabilities, such as storefront visibility, publishing and translation support. [`Metafields`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) can reference metaobjects to connect custom data with [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects, [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects, and other Shopify resources.
 */
class ShopifyMetaobject implements ShopifyNode
{
    protected $capabilities;
    protected $createdAt;
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
    protected $values;

    
    /**
     * Metaobject capabilities for this Metaobject.
     *
     * @return ShopifyMetaobjectCapabilityData
     */
    public function getCapabilities(): ?ShopifyMetaobjectCapabilityData
    {
        return $this->capabilities;
    }

    
    /**
     * When the object was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The app used to create the object.
     *
     * @return ShopifyApp
     */
    public function getCreatedBy(): ?ShopifyApp
    {
        return $this->createdBy;
    }

    
    /**
     * The app used to create the object.
     *
     * @return ShopifyApp
     */
    public function getCreatedByApp(): ?ShopifyApp
    {
        return $this->createdByApp;
    }

    
    /**
     * The staff member who created the metaobject.
     *
     * @return ShopifyStaffMember
     */
    public function getCreatedByStaff(): ?ShopifyStaffMember
    {
        return $this->createdByStaff;
    }

    
    /**
     * The MetaobjectDefinition that models this object type.
     *
     * @return ShopifyMetaobjectDefinition
     */
    public function getDefinition(): ?ShopifyMetaobjectDefinition
    {
        return $this->definition;
    }

    
    /**
     * The preferred display name field value of the metaobject.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * The field for an object key, or null if the key has no field definition.
     *
     * @return ShopifyMetaobjectField
     */
    public function getField(): ?ShopifyMetaobjectField
    {
        return $this->field;
    }

    
    /**
     * All ordered fields of the metaobject with their definitions and values.
     *
     * @return ShopifyMetaobjectField[]
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    
    /**
     * The unique handle of the object, useful as a custom ID.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * List of back references metafields that belong to the resource.
     *
     * @return ShopifyMetafieldRelationConnection
     */
    public function getReferencedBy(): ?ShopifyMetafieldRelationConnection
    {
        return $this->referencedBy;
    }

    
    /**
     * The staff member who created the metaobject.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

    
    /**
     * The recommended field to visually represent this metaobject. May be a file reference or color         field.
     *
     * @return ShopifyMetaobjectField
     */
    public function getThumbnailField(): ?ShopifyMetaobjectField
    {
        return $this->thumbnailField;
    }

    
    /**
     * The type of the metaobject.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * When the object was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The values of the metaobject.
     *
     * @return string
     */
    public function getValues(): mixed
    {
        return $this->values;
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
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
            if (isset($data['values']) && $data['values'] !== null) {
                $instance->values = $data['values'];
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
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
            if ($this->values !== null) {
                $data['values'] = $this->values;
            }
            return $data;
        }
}
