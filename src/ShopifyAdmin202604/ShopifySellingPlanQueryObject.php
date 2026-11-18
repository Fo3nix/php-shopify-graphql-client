<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

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
class ShopifySellingPlanQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlan";

    /**
     * A selling plan policy which describes the recurring billing details.
     */
    public function selectBillingPolicy(?ShopifySellingPlanBillingPolicyArgumentsObject $argsObject = null): ShopifySellingPlanBillingPolicyUnionObject
    {
        $object = new ShopifySellingPlanBillingPolicyUnionObject("billingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The category used to classify the selling plan for reporting purposes.
     */
    public function selectCategory(): static
    {
        $this->selectField("category");

        return $this;
    }

    /**
     * The date and time when the selling plan was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A selling plan policy which describes the delivery details.
     */
    public function selectDeliveryPolicy(?ShopifySellingPlanDeliveryPolicyArgumentsObject $argsObject = null): ShopifySellingPlanDeliveryPolicyUnionObject
    {
        $object = new ShopifySellingPlanDeliveryPolicyUnionObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Buyer facing string which describes the selling plan commitment.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * When to reserve inventory for a selling plan.
     */
    public function selectInventoryPolicy(?ShopifySellingPlanInventoryPolicyArgumentsObject $argsObject = null): ShopifySellingPlanInventoryPolicyQueryObject
    {
        $object = new ShopifySellingPlanInventoryPolicyQueryObject("inventoryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifySellingPlanMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifySellingPlanMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifySellingPlanMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A customer-facing description of the selling plan.
     *
     * If your store supports multiple currencies, then don't include country-specific pricing content, such as "Buy monthly, get 10$ CAD off". This field won't be converted to reflect different currencies.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The values of all options available on the selling plan. Selling plans are grouped together in Liquid when they're created by the same app, and have the same `selling_plan_group.name` and `selling_plan_group.options` values.
     */
    public function selectOptions(): static
    {
        $this->selectField("options");

        return $this;
    }

    /**
     * Relative position of the selling plan for display. A lower position will be displayed before a higher position.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }

    /**
     * Selling plan pricing details.
     */
    public function selectPricingPolicies(?ShopifySellingPlanPricingPoliciesArgumentsObject $argsObject = null): ShopifySellingPlanPricingPolicyUnionObject
    {
        $object = new ShopifySellingPlanPricingPolicyUnionObject("pricingPolicies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifySellingPlanTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
