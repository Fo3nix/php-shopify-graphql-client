<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldReferencerHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMetafieldReferenceHydrator;

/**
 * Defines a relation between two resources via a reference metafield.
 * The referencer owns the joining field with a given namespace and key,
 * while the target is referenced by the field.
 */
class ShopifyMetafieldRelation
{
    protected $key;
    protected $name;
    protected $namespace;
    protected $referencer;
    protected $target;

    
    /**
     * The key of the field making the reference.
     *
     * @return string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    
    /**
     * The name of the field making the reference.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The namespace of the metafield making the reference, or type of the metaobject.
     *
     * @return string
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    
    /**
     * The resource making the reference.
     *
     * @return ShopifyAppInstallation|ShopifyArticle|ShopifyBlog|ShopifyCollection|ShopifyCompany|ShopifyCompanyLocation|ShopifyCustomer|ShopifyDeliveryCustomization|ShopifyDiscountAutomaticNode|ShopifyDiscountCodeNode|ShopifyDiscountNode|ShopifyDraftOrder|ShopifyFulfillmentOrder|ShopifyLocation|ShopifyMarket|ShopifyMetaobject|ShopifyOrder|ShopifyPage|ShopifyPaymentCustomization|ShopifyProduct|ShopifyProductVariant|ShopifyShop
     */
    public function getReferencer(): ShopifyAppInstallation|ShopifyArticle|ShopifyBlog|ShopifyCollection|ShopifyCompany|ShopifyCompanyLocation|ShopifyCustomer|ShopifyDeliveryCustomization|ShopifyDiscountAutomaticNode|ShopifyDiscountCodeNode|ShopifyDiscountNode|ShopifyDraftOrder|ShopifyFulfillmentOrder|ShopifyLocation|ShopifyMarket|ShopifyMetaobject|ShopifyOrder|ShopifyPage|ShopifyPaymentCustomization|ShopifyProduct|ShopifyProductVariant|ShopifyShop|null
    {
        return $this->referencer;
    }

    
    /**
     * The referenced resource.
     *
     * @return ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo
     */
    public function getTarget(): ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo|null
    {
        return $this->target;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['key']) && $data['key'] !== null) {
                $instance->key = $data['key'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['namespace']) && $data['namespace'] !== null) {
                $instance->namespace = $data['namespace'];
            }
            if (isset($data['referencer']) && $data['referencer'] !== null) {
                $instance->referencer = ShopifyMetafieldReferencerHydrator::fromArray($data['referencer']);
            }
            if (isset($data['target']) && $data['target'] !== null) {
                $instance->target = ShopifyMetafieldReferenceHydrator::fromArray($data['target']);
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
            if ($this->key !== null) {
                $data['key'] = $this->key;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->namespace !== null) {
                $data['namespace'] = $this->namespace;
            }
            if ($this->referencer !== null) {
                $data['referencer'] = ShopifyMetafieldReferencerHydrator::toArray($this->referencer);
            }
            if ($this->target !== null) {
                $data['target'] = ShopifyMetafieldReferenceHydrator::toArray($this->target);
            }
            return $data;
        }
}
