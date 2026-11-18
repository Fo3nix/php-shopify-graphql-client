<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldAccess;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldCapabilities;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionConstraints;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStandardMetafieldDefinitionTemplate;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionType;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldDefinitionValidation;

/**
 * Defines the structure, validation rules, and permissions for [`Metafield`](https://shopify.dev/docs/api/admin-graphql/current/objects/Metafield) objects attached to a specific owner type. Each definition establishes a schema that metafields must follow, including the data type and validation constraints.
 *
 * The definition controls access permissions across different APIs, determines whether the metafield can be used for filtering or as a collection condition, and can be constrained to specific resource subtypes.
 */
class ShopifyMetafieldDefinition implements ShopifyNode
{
    protected $access;
    protected $capabilities;
    protected $constraints;
    protected $description;
    protected $id;
    protected $key;
    protected $metafields;
    protected $metafieldsCount;
    protected $name;
    protected $namespace;
    protected $ownerType;
    protected $pinnedPosition;
    protected $standardTemplate;
    protected $type;
    protected $useAsCollectionCondition;
    protected $validationStatus;
    protected $validations;

    
    /**
     * The access settings associated with the metafield definition.
     *
     * @return ShopifyMetafieldAccess
     */
    public function getAccess(): ?ShopifyMetafieldAccess
    {
        return $this->access;
    }

    
    /**
     * The capabilities of the metafield definition.
     *
     * @return ShopifyMetafieldCapabilities
     */
    public function getCapabilities(): ?ShopifyMetafieldCapabilities
    {
        return $this->capabilities;
    }

    
    /**
     * The [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions)
     * that determine what subtypes of resources a metafield definition applies to.
     *
     * @return ShopifyMetafieldDefinitionConstraints
     */
    public function getConstraints(): ?ShopifyMetafieldDefinitionConstraints
    {
        return $this->constraints;
    }

    
    /**
     * The description of the metafield definition.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
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
     * The unique identifier for the metafield definition within its namespace.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The metafields that belong to the metafield definition.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The count of the metafields that belong to the metafield definition.
     *
     * @return int
     */
    public function getMetafieldsCount(): ?int
    {
        return $this->metafieldsCount;
    }

    
    /**
     * The human-readable name of the metafield definition.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The container for a group of metafields that the metafield definition is associated with.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    
    /**
     * The resource type that the metafield definition is attached to.
     *
     * @return string A ShopifyMetafieldOwnerTypeEnumObject value
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    
    /**
     * The position of the metafield definition in the pinned list.
     *
     * @return int
     */
    public function getPinnedPosition(): ?int
    {
        return $this->pinnedPosition;
    }

    
    /**
     * The standard metafield definition template associated with the metafield definition.
     *
     * @return ShopifyStandardMetafieldDefinitionTemplate
     */
    public function getStandardTemplate(): ?ShopifyStandardMetafieldDefinitionTemplate
    {
        return $this->standardTemplate;
    }

    
    /**
     * The type of data that each of the metafields that belong to the metafield definition will store.
     * Refer to the list of [supported types](https://shopify.dev/apps/metafields/types).
     *
     * @return ShopifyMetafieldDefinitionType
     */
    public function getType(): ?ShopifyMetafieldDefinitionType
    {
        return $this->type;
    }

    
    /**
     * Whether the metafield definition can be used as a collection condition.
     *
     * @return bool
     */
    public function getUseAsCollectionCondition(): ?bool
    {
        return $this->useAsCollectionCondition;
    }

    
    /**
     * The validation status for the metafields that belong to the metafield definition.
     *
     * @return string A ShopifyMetafieldDefinitionValidationStatusEnumObject value
     */
    public function getValidationStatus(): ?string
    {
        return $this->validationStatus;
    }

    
    /**
     * A list of [validation options](https://shopify.dev/apps/metafields/definitions/validation) for
     * the metafields that belong to the metafield definition. For example, for a metafield definition with the
     * type `date`, you can set a minimum date validation so that each of the metafields that belong to it can only
     * store dates after the specified minimum.
     *
     * @return ShopifyMetafieldDefinitionValidation[]
     */
    public function getValidations(): ?array
    {
        return $this->validations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['access']) && $data['access'] !== null) {
                $instance->access = ShopifyMetafieldAccess::fromArray($data['access']);
            }
            if (isset($data['capabilities']) && $data['capabilities'] !== null) {
                $instance->capabilities = ShopifyMetafieldCapabilities::fromArray($data['capabilities']);
            }
            if (isset($data['constraints']) && $data['constraints'] !== null) {
                $instance->constraints = ShopifyMetafieldDefinitionConstraints::fromArray($data['constraints']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['metafieldsCount']) && $data['metafieldsCount'] !== null) {
                $instance->metafieldsCount = $data['metafieldsCount'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['ownerType']) && $data['ownerType'] !== null) {
                $instance->ownerType = $data['ownerType'];
            }
            if (isset($data['pinnedPosition']) && $data['pinnedPosition'] !== null) {
                $instance->pinnedPosition = $data['pinnedPosition'];
            }
            if (isset($data['standardTemplate']) && $data['standardTemplate'] !== null) {
                $instance->standardTemplate = ShopifyStandardMetafieldDefinitionTemplate::fromArray($data['standardTemplate']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = ShopifyMetafieldDefinitionType::fromArray($data['type']);
            }
            if (isset($data['useAsCollectionCondition']) && $data['useAsCollectionCondition'] !== null) {
                $instance->useAsCollectionCondition = $data['useAsCollectionCondition'];
            }
            if (isset($data['validationStatus']) && $data['validationStatus'] !== null) {
                $instance->validationStatus = $data['validationStatus'];
            }
            if (isset($data['validations']) && $data['validations'] !== null) {
                $instance->validations = array_map(function($item) { return ShopifyMetafieldDefinitionValidation::fromArray($item); }, $data['validations']);
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
            if ($this->constraints !== null) {
                $data['constraints'] = $this->constraints->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->metafieldsCount !== null) {
                $data['metafieldsCount'] = $this->metafieldsCount;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->ownerType !== null) {
                $data['ownerType'] = $this->ownerType;
            }
            if ($this->pinnedPosition !== null) {
                $data['pinnedPosition'] = $this->pinnedPosition;
            }
            if ($this->standardTemplate !== null) {
                $data['standardTemplate'] = $this->standardTemplate->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type->asArray();
            }
            if ($this->useAsCollectionCondition !== null) {
                $data['useAsCollectionCondition'] = $this->useAsCollectionCondition;
            }
            if ($this->validationStatus !== null) {
                $data['validationStatus'] = $this->validationStatus;
            }
            if ($this->validations !== null) {
                $data['validations'] = array_map(function($item) { return $item->asArray(); }, $this->validations);
            }
            return $data;
        }
}
