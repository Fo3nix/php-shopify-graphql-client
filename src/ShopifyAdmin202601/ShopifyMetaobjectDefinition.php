<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectAccess;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilities;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectFieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStandardMetaobjectDefinitionTemplate;

/**
 * Defines the structure and configuration for a custom data type in Shopify. Each definition specifies the fields, validation rules, and capabilities that apply to all [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) entries created from it.
 *
 * The definition includes field definitions that determine what data to store, access controls for [the Shopify admin](https://shopify.dev/docs/apps/build/custom-data/permissions#admin-permissions) and [Storefront](https://shopify.dev/docs/apps/build/custom-data/permissions#storefront-permissions) APIs, and capabilities such as publishability and translatability. You can track which [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) or [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) created the definition and optionally base it on a [`StandardMetaobjectDefinitionTemplate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StandardMetaobjectDefinitionTemplate).
 */
class ShopifyMetaobjectDefinition implements ShopifyNode
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
     * Access configuration for the metaobject definition.
     *
     * @return ShopifyMetaobjectAccess
     */
    public function getAccess(): ?ShopifyMetaobjectAccess
    {
        return $this->access;
    }

    
    /**
     * The capabilities of the metaobject definition.
     *
     * @return ShopifyMetaobjectCapabilities
     */
    public function getCapabilities(): ?ShopifyMetaobjectCapabilities
    {
        return $this->capabilities;
    }

    
    /**
     * The app used to create the metaobject definition.
     *
     * @return ShopifyApp
     */
    public function getCreatedByApp(): ?ShopifyApp
    {
        return $this->createdByApp;
    }

    
    /**
     * The staff member who created the metaobject definition.
     *
     * @return ShopifyStaffMember
     */
    public function getCreatedByStaff(): ?ShopifyStaffMember
    {
        return $this->createdByStaff;
    }

    
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
     * The fields defined for this object type.
     *
     * @return ShopifyMetaobjectFieldDefinition[]
     */
    public function getFieldDefinitions(): ?array
    {
        return $this->fieldDefinitions;
    }

    
    /**
     * Whether this metaobject definition has field whose type can visually represent a metaobject with        the `thumbnailField`.
     *
     * @return bool
     */
    public function getHasThumbnailField(): ?bool
    {
        return $this->hasThumbnailField;
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
     * A paginated connection to the metaobjects associated with the definition.
     *
     * @return ShopifyMetaobjectConnection
     */
    public function getMetaobjects(): ?ShopifyMetaobjectConnection
    {
        return $this->metaobjects;
    }

    
    /**
     * The count of metaobjects created for the definition.
     *
     * @return int
     */
    public function getMetaobjectsCount(): ?int
    {
        return $this->metaobjectsCount;
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
     * The standard metaobject template associated with the definition.
     *
     * @return ShopifyStandardMetaobjectDefinitionTemplate
     */
    public function getStandardTemplate(): ?ShopifyStandardMetaobjectDefinitionTemplate
    {
        return $this->standardTemplate;
    }

    
    /**
     * The type of the object definition. Defines the namespace of associated metafields.
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
            if (isset($data['access']) && $data['access'] !== null) {
                $instance->access = ShopifyMetaobjectAccess::fromArray($data['access']);
            }
            if (isset($data['capabilities']) && $data['capabilities'] !== null) {
                $instance->capabilities = ShopifyMetaobjectCapabilities::fromArray($data['capabilities']);
            }
            if (isset($data['createdByApp']) && $data['createdByApp'] !== null) {
                $instance->createdByApp = ShopifyApp::fromArray($data['createdByApp']);
            }
            if (isset($data['createdByStaff']) && $data['createdByStaff'] !== null) {
                $instance->createdByStaff = ShopifyStaffMember::fromArray($data['createdByStaff']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['displayNameKey']) && $data['displayNameKey'] !== null) {
                $instance->displayNameKey = $data['displayNameKey'];
            }
            if (isset($data['fieldDefinitions']) && $data['fieldDefinitions'] !== null) {
                $instance->fieldDefinitions = array_map(function($item) { return ShopifyMetaobjectFieldDefinition::fromArray($item); }, $data['fieldDefinitions']);
            }
            if (isset($data['hasThumbnailField']) && $data['hasThumbnailField'] !== null) {
                $instance->hasThumbnailField = $data['hasThumbnailField'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metaobjects']) && $data['metaobjects'] !== null) {
                $instance->metaobjects = ShopifyMetaobjectConnection::fromArray($data['metaobjects']);
            }
            if (isset($data['metaobjectsCount']) && $data['metaobjectsCount'] !== null) {
                $instance->metaobjectsCount = $data['metaobjectsCount'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['standardTemplate']) && $data['standardTemplate'] !== null) {
                $instance->standardTemplate = ShopifyStandardMetaobjectDefinitionTemplate::fromArray($data['standardTemplate']);
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
