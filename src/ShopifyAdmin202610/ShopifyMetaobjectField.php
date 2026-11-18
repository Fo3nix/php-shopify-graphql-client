<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetaobjectFieldDefinition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldReferenceHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldReferenceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetaobjectThumbnail;

/**
 * Provides a field definition and the data value assigned to it.
 */
class ShopifyMetaobjectField
{
    protected $definition;
    protected $jsonValue;
    protected $key;
    protected $reference;
    protected $references;
    protected $thumbnail;
    protected $type;
    protected $value;

    
    /**
     * The field definition for this object key.
     *
     * @return ShopifyMetaobjectFieldDefinition
     */
    public function getDefinition(): ?ShopifyMetaobjectFieldDefinition
    {
        return $this->definition;
    }

    
    /**
     * The assigned field value in JSON format.
     *
     * @return string
     */
    public function getJsonValue(): mixed
    {
        return $this->jsonValue;
    }

    
    /**
     * The object key of this field.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * For resource reference fields, provides the referenced object.
     *
     * @return ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo
     */
    public function getReference(): ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo|null
    {
        return $this->reference;
    }

    
    /**
     * For resource reference list fields, provides the list of referenced objects.
     *
     * @return ShopifyMetafieldReferenceConnection
     */
    public function getReferences(): ?ShopifyMetafieldReferenceConnection
    {
        return $this->references;
    }

    
    /**
     * For file reference or color fields, provides visual attributes for this field.
     *
     * @return ShopifyMetaobjectThumbnail
     */
    public function getThumbnail(): ?ShopifyMetaobjectThumbnail
    {
        return $this->thumbnail;
    }

    
    /**
     * The type of the field.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The assigned field value, always stored as a string regardless of the field type.
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
            if (isset($data['definition']) && $data['definition'] !== null) {
                $instance->definition = ShopifyMetaobjectFieldDefinition::fromArray($data['definition']);
            }
            if (isset($data['jsonValue']) && $data['jsonValue'] !== null) {
                $instance->jsonValue = $data['jsonValue'];
            }
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['reference']) && $data['reference'] !== null) {
                $instance->reference = ShopifyMetafieldReferenceHydrator::fromArray($data['reference']);
            }
            if (isset($data['references']) && $data['references'] !== null) {
                $instance->references = ShopifyMetafieldReferenceConnection::fromArray($data['references']);
            }
            if (isset($data['thumbnail']) && $data['thumbnail'] !== null) {
                $instance->thumbnail = ShopifyMetaobjectThumbnail::fromArray($data['thumbnail']);
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
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
            if ($this->definition !== null) {
                $data['definition'] = $this->definition->asArray();
            }
            if ($this->jsonValue !== null) {
                $data['jsonValue'] = $this->jsonValue;
            }
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->reference !== null) {
                $data['reference'] = ShopifyMetafieldReferenceHydrator::toArray($this->reference);
            }
            if ($this->references !== null) {
                $data['references'] = $this->references->asArray();
            }
            if ($this->thumbnail !== null) {
                $data['thumbnail'] = $this->thumbnail->asArray();
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->value !== null) {
                $data['value'] = $this->value;
            }
            return $data;
        }
}
