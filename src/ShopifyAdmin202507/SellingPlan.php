<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanBillingPolicy;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanDeliveryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanInventoryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanPricingPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Translation;

class SellingPlan
{
    protected $billingPolicy;
    protected $category;
    protected $createdAt;
    protected $deliveryPolicy;
    protected $description;
    protected $id;
    protected $inventoryPolicy;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $options;
    protected $position;
    protected $pricingPolicies;
    protected $translations;

    
    /**
     * @return SellingPlanBillingPolicy
     */
    public function getBillingPolicy()
    {
        return $this->billingPolicy;
    }

    
    /**
     * @return SellingPlanCategoryEnumObject
     */
    public function getCategory()
    {
        return $this->category;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return SellingPlanDeliveryPolicy
     */
    public function getDeliveryPolicy()
    {
        return $this->deliveryPolicy;
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
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return SellingPlanInventoryPolicy
     */
    public function getInventoryPolicy()
    {
        return $this->inventoryPolicy;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    
    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    
    /**
     * @return SellingPlanPricingPolicy[]
     */
    public function getPricingPolicies()
    {
        return $this->pricingPolicies;
    }

    
    /**
     * @return Translation[]
     */
    public function getTranslations()
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
            if (isset($data['billingPolicy']) && $data['billingPolicy'] !== null) {
                $instance->billingPolicy = SellingPlanBillingPolicy::fromArray($data['billingPolicy']);
            }
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = $data['category'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deliveryPolicy']) && $data['deliveryPolicy'] !== null) {
                $instance->deliveryPolicy = SellingPlanDeliveryPolicy::fromArray($data['deliveryPolicy']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryPolicy']) && $data['inventoryPolicy'] !== null) {
                $instance->inventoryPolicy = SellingPlanInventoryPolicy::fromArray($data['inventoryPolicy']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['options']) && $data['options'] !== null) {
                $instance->options = $data['options'];
            }
            if (isset($data['position']) && $data['position'] !== null) {
                $instance->position = $data['position'];
            }
            if (isset($data['pricingPolicies']) && $data['pricingPolicies'] !== null) {
                $instance->pricingPolicies = array_map(function($item) { return SellingPlanPricingPolicy::fromArray($item); }, $data['pricingPolicies']);
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return Translation::fromArray($item); }, $data['translations']);
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
            if ($this->billingPolicy !== null) {
                $data['billingPolicy'] = $this->billingPolicy->asArray();
            }
            if ($this->category !== null) {
                $data['category'] = $this->category;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deliveryPolicy !== null) {
                $data['deliveryPolicy'] = $this->deliveryPolicy->asArray();
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryPolicy !== null) {
                $data['inventoryPolicy'] = $this->inventoryPolicy->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->options !== null) {
                $data['options'] = $this->options;
            }
            if ($this->position !== null) {
                $data['position'] = $this->position;
            }
            if ($this->pricingPolicies !== null) {
                $data['pricingPolicies'] = array_map(function($item) { return $item->asArray(); }, $this->pricingPolicies);
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
