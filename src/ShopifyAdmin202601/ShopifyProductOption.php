<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLinkedMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductOptionValue;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;

/**
 * A product attribute that customers can choose from, such as "Size", "Color", or "Material". [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects use options to define the different variations available for purchase. Each option has a name and a set of possible values that combine to create [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects.
 *
 * The option includes its display position, associated values, and optional [`LinkedMetafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LinkedMetafield) for structured data. Options support translations for international selling and track which [`ProductOptionValue`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue) objects that variants actively use versus unused values that exist without associated variants.
 */
class ShopifyProductOption implements ShopifyHasPublishedTranslations, ShopifyNode
{
    protected $createdAt;
    protected $id;
    protected $linkedMetafield;
    protected $name;
    protected $optionValues;
    protected $position;
    protected $translations;
    protected $values;

    
    /**
     * The date and time when the product option was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * The metafield identifier linked to this option.
     *
     * @return ShopifyLinkedMetafield
     */
    public function getLinkedMetafield(): ?ShopifyLinkedMetafield
    {
        return $this->linkedMetafield;
    }

    
    /**
     * The product option’s name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Similar to values, option_values returns all the corresponding option value objects to the product option, including values not assigned to any variants.
     *
     * @return ShopifyProductOptionValue[]
     */
    public function getOptionValues(): ?array
    {
        return $this->optionValues;
    }

    
    /**
     * The product option's position.
     *
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    
    /**
     * The corresponding value to the product option name.
     *
     * @return string[]
     */
    public function getValues(): ?array
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
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['linkedMetafield']) && $data['linkedMetafield'] !== null) {
                $instance->linkedMetafield = ShopifyLinkedMetafield::fromArray($data['linkedMetafield']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['optionValues']) && $data['optionValues'] !== null) {
                $instance->optionValues = array_map(function($item) { return ShopifyProductOptionValue::fromArray($item); }, $data['optionValues']);
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->linkedMetafield !== null) {
                $data['linkedMetafield'] = $this->linkedMetafield->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->optionValues !== null) {
                $data['optionValues'] = array_map(function($item) { return $item->asArray(); }, $this->optionValues);
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->values !== null) {
                $data['values'] = $this->values;
            }
            return $data;
        }
}
