<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanBillingPolicyHydrator;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanDeliveryPolicyHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanInventoryPolicy;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySellingPlanPricingPolicyHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;

/**
 * How a product can be sold and purchased through recurring billing or deferred purchase options. Defines the specific terms for subscriptions, pre-orders, or try-before-you-buy offers, including when to bill customers, when to fulfill orders, and what pricing adjustments to apply.
 *
 * Each selling plan has billing, delivery, and pricing policies that control the purchase experience. The plan's [`options`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlan#field-SellingPlan.fields.options) and [`category`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlan#field-SellingPlan.fields.category) help merchants organize and report on different selling strategies. Plans are grouped within a [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup) that associates them with [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects.
 *
 * > Caution:
 * > Selling plans and associated records are automatically deleted 48 hours after a merchant uninstalls the [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) that created them. Back up these records if you need to restore them later.
 *
 * Learn more about [selling plans](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan).
 */
class ShopifySellingPlan implements ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyHasPublishedTranslations, ShopifyNode
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
     * A selling plan policy which describes the recurring billing details.
     *
     * @return ShopifySellingPlanFixedBillingPolicy|ShopifySellingPlanRecurringBillingPolicy
     */
    public function getBillingPolicy(): ShopifySellingPlanFixedBillingPolicy|ShopifySellingPlanRecurringBillingPolicy|null
    {
        return $this->billingPolicy;
    }

    
    /**
     * The category used to classify the selling plan for reporting purposes.
     *
     * @return string A ShopifySellingPlanCategoryEnumObject value
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    
    /**
     * The date and time when the selling plan was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * A selling plan policy which describes the delivery details.
     *
     * @return ShopifySellingPlanFixedDeliveryPolicy|ShopifySellingPlanRecurringDeliveryPolicy
     */
    public function getDeliveryPolicy(): ShopifySellingPlanFixedDeliveryPolicy|ShopifySellingPlanRecurringDeliveryPolicy|null
    {
        return $this->deliveryPolicy;
    }

    
    /**
     * Buyer facing string which describes the selling plan commitment.
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
     * When to reserve inventory for a selling plan.
     *
     * @return ShopifySellingPlanInventoryPolicy
     */
    public function getInventoryPolicy(): ?ShopifySellingPlanInventoryPolicy
    {
        return $this->inventoryPolicy;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * A customer-facing description of the selling plan.
     *
     * If your store supports multiple currencies, then don't include country-specific pricing content, such as "Buy monthly, get 10$ CAD off". This field won't be converted to reflect different currencies.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The values of all options available on the selling plan. Selling plans are grouped together in Liquid when they're created by the same app, and have the same `selling_plan_group.name` and `selling_plan_group.options` values.
     *
     * @return string[]
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    
    /**
     * Relative position of the selling plan for display. A lower position will be displayed before a higher position.
     *
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    
    /**
     * Selling plan pricing details.
     *
     * @return (ShopifySellingPlanFixedPricingPolicy|ShopifySellingPlanRecurringPricingPolicy)[]
     */
    public function getPricingPolicies(): ?array
    {
        return $this->pricingPolicies;
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
            if (isset($data['billingPolicy']) && $data['billingPolicy'] !== null) {
                $instance->billingPolicy = ShopifySellingPlanBillingPolicyHydrator::fromArray($data['billingPolicy']);
            }
            if (isset($data['category']) && $data['category'] !== null) {
                $instance->category = $data['category'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deliveryPolicy']) && $data['deliveryPolicy'] !== null) {
                $instance->deliveryPolicy = ShopifySellingPlanDeliveryPolicyHydrator::fromArray($data['deliveryPolicy']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryPolicy']) && $data['inventoryPolicy'] !== null) {
                $instance->inventoryPolicy = ShopifySellingPlanInventoryPolicy::fromArray($data['inventoryPolicy']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
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
                $instance->pricingPolicies = array_map(function($item) { return ShopifySellingPlanPricingPolicyHydrator::fromArray($item); }, $data['pricingPolicies']);
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
            if ($this->billingPolicy !== null) {
                $data['billingPolicy'] = ShopifySellingPlanBillingPolicyHydrator::toArray($this->billingPolicy);
            }
            if ($this->category !== null) {
                $data['category'] = $this->category;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deliveryPolicy !== null) {
                $data['deliveryPolicy'] = ShopifySellingPlanDeliveryPolicyHydrator::toArray($this->deliveryPolicy);
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
                $data['pricingPolicies'] = array_map(function($item) { return ShopifySellingPlanPricingPolicyHydrator::toArray($item); }, $this->pricingPolicies);
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
