<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductOptionValueSwatch;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTranslation;

/**
 * A specific value for a [`ProductOption`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption), such as "Red" or "Blue" for a "Color" option. Each value can be assigned to [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects to create different versions of a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product).
 *
 * The value tracks whether any variants currently use it through the [`hasVariants`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue#field-hasVariants) field. Values can include visual representations through swatches that display colors or images. When linked to a [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield), the [`linkedMetafieldValue`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue#field-linkedMetafieldValue) provides additional structured data for the option value.
 */
class ShopifyProductOptionValue implements ShopifyHasPublishedTranslations, ShopifyNode
{
    protected $hasVariants;
    protected $id;
    protected $linkedMetafieldValue;
    protected $name;
    protected $swatch;
    protected $translations;

    
    /**
     * Whether the product option value has any linked variants.
     *
     * @return bool
     */
    public function getHasVariants(): ?bool
    {
        return $this->hasVariants;
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
     * The value of the linked metafield.
     *
     * @return string
     */
    public function getLinkedMetafieldValue(): ?string
    {
        return $this->linkedMetafieldValue;
    }

    
    /**
     * The name of the product option value.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The swatch associated with the product option value.
     *
     * @return ShopifyProductOptionValueSwatch
     */
    public function getSwatch(): ?ShopifyProductOptionValueSwatch
    {
        return $this->swatch;
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
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['hasVariants']) && $data['hasVariants'] !== null) {
                $instance->hasVariants = $data['hasVariants'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['linkedMetafieldValue']) && $data['linkedMetafieldValue'] !== null) {
                $instance->linkedMetafieldValue = $data['linkedMetafieldValue'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['swatch']) && $data['swatch'] !== null) {
                $instance->swatch = ShopifyProductOptionValueSwatch::fromArray($data['swatch']);
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
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
            if ($this->hasVariants !== null) {
                $data['hasVariants'] = $this->hasVariants;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->linkedMetafieldValue !== null) {
                $data['linkedMetafieldValue'] = $this->linkedMetafieldValue;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->swatch !== null) {
                $data['swatch'] = $this->swatch->asArray();
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
