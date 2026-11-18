<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyHasMetafieldsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyHasMetafields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldReferenceHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldReferenceConnection;

/**
 * Metafields enable you to attach additional information to a Shopify resource, such as a [Product](https://shopify.dev/api/admin-graphql/latest/objects/product) or a [Collection](https://shopify.dev/api/admin-graphql/latest/objects/collection).
 * For more information about where you can attach metafields refer to [HasMetafields](https://shopify.dev/api/admin-graphql/latest/interfaces/HasMetafields).
 * Some examples of the data that metafields enable you to store are specifications, size charts, downloadable documents, release dates, images, or part numbers.
 * Metafields are identified by an owner resource, namespace, and key. and store a value along with type information for that value.
 */
class ShopifyMetafield implements ShopifyHasCompareDigest, ShopifyLegacyInteroperability, ShopifyNode
{
    protected $compareDigest;
    protected $createdAt;
    protected $definition;
    protected $description;
    protected $id;
    protected $jsonValue;
    protected $key;
    protected $legacyResourceId;
    protected $namespace;
    protected $owner;
    protected $ownerType;
    protected $reference;
    protected $references;
    protected $type;
    protected $updatedAt;
    protected $value;

    
    /**
     * The data stored in the resource, represented as a digest.
     *
     * @return string
     */
    public function getCompareDigest(): ?string
    {
        return $this->compareDigest;
    }

    
    /**
     * The date and time when the metafield was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The metafield definition that the metafield belongs to, if any. Returns `null` when the metafield's value doesn't pass validation against the definition with the same namespace and key. To list those metafields, query the definition's `metafields` connection with `validationStatus: INVALID`.
     *
     * @return ShopifyMetafieldDefinition
     */
    public function getDefinition(): ?ShopifyMetafieldDefinition
    {
        return $this->definition;
    }

    
    /**
     * The description of the metafield.
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
     * The data stored in the metafield in JSON format.
     *
     * @return string
     */
    public function getJsonValue(): mixed
    {
        return $this->jsonValue;
    }

    
    /**
     * The unique identifier for the metafield within its namespace. If the metafield was requested with a combined `namespace.key` value, such as through the `keys` argument, this field returns the combined value.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The container for a group of metafields that the metafield is associated with.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    
    /**
     * The resource that the metafield is attached to.
     *
     * @return ShopifyHasMetafields
     */
    public function getOwner(): ?ShopifyHasMetafields
    {
        return $this->owner;
    }

    
    /**
     * The type of resource that the metafield is attached to.
     *
     * @return string A ShopifyMetafieldOwnerTypeEnumObject value
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    
    /**
     * Returns a reference object if the metafield definition's type is a resource reference.
     *
     * @return ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo
     */
    public function getReference(): ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo|null
    {
        return $this->reference;
    }

    
    /**
     * A list of reference objects if the metafield's type is a resource reference list.
     *
     * @return ShopifyMetafieldReferenceConnection
     */
    public function getReferences(): ?ShopifyMetafieldReferenceConnection
    {
        return $this->references;
    }

    
    /**
     * The type of data that's stored in the metafield.
     * Refer to the list of [supported types](https://shopify.dev/apps/metafields/types).
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The date and time when the metafield was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The data stored in the metafield. Always stored as a string, regardless of the metafield's type.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['compareDigest']) && $data['compareDigest'] !== null) {
                $instance->compareDigest = $data['compareDigest'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = ShopifyMetafieldDefinition::fromArray($data['definition']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['jsonValue']) && $data['jsonValue'] !== null) {
                $instance->jsonValue = $data['jsonValue'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['owner']) && $data['owner'] !== null) {
                $instance->owner = ShopifyHasMetafieldsHydrator::fromArray($data['owner']);
            }
            if (isset($data['ownerType']) && $data['ownerType'] !== null) {
                $instance->ownerType = $data['ownerType'];
            }
            if (isset($data['reference']) && $data['reference'] !== null) {
                $instance->reference = ShopifyMetafieldReferenceHydrator::fromArray($data['reference']);
            }
            if (isset($data['references']) && $data['references'] !== null) {
                $instance->references = ShopifyMetafieldReferenceConnection::fromArray($data['references']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = $data['value'];
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
            if ($this->compareDigest !== null) {
                $data['compareDigest'] = $this->compareDigest;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->jsonValue !== null) {
                $data['jsonValue'] = $this->jsonValue;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->owner !== null) {
                $data['owner'] = ShopifyHasMetafieldsHydrator::toArray($this->owner);
            }
            if ($this->ownerType !== null) {
                $data['ownerType'] = $this->ownerType;
            }
            if ($this->reference !== null) {
                $data['reference'] = ShopifyMetafieldReferenceHydrator::toArray($this->reference);
            }
            if ($this->references !== null) {
                $data['references'] = $this->references->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
