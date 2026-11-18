<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A selling method that defines how products can be sold through purchase options like subscriptions, pre-orders, or try-before-you-buy. Groups one or more [`SellingPlan`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlan) objects that share the same selling method and options.
 *
 * The group provides buyer-facing labels and merchant-facing descriptions for the selling method. Associates [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects with selling plan groups to offer them through these purchase options.
 *
 * > Caution:
 * > Selling plan groups and their associated records are automatically deleted 48 hours after a merchant uninstalls the [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) that created them. Back up these records if you need to restore them later.
 */
class ShopifySellingPlanGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroup";

    /**
     * The ID for app, exposed in Liquid and product JSON.
     */
    public function selectAppId(): static
    {
        $this->selectField("appId");

        return $this;
    }

    /**
     * Whether the given product is directly associated to the selling plan group.
     */
    public function selectAppliesToProduct(): static
    {
        $this->selectField("appliesToProduct");

        return $this;
    }

    /**
     * Whether the given product variant is directly associated to the selling plan group.
     */
    public function selectAppliesToProductVariant(): static
    {
        $this->selectField("appliesToProductVariant");

        return $this;
    }

    /**
     * Whether any of the product variants of the given product are associated to the selling plan group.
     */
    public function selectAppliesToProductVariants(): static
    {
        $this->selectField("appliesToProductVariants");

        return $this;
    }

    /**
     * The date and time when the selling plan group was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The merchant-facing description of the selling plan group.
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
     * The merchant-facing label of the selling plan group.
     */
    public function selectMerchantCode(): static
    {
        $this->selectField("merchantCode");

        return $this;
    }

    /**
     * The buyer-facing label of the selling plan group.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The values of all options available on the selling plan group. Selling plans are grouped together in Liquid when they're created by the same app, and have the same `selling_plan_group.name` and `selling_plan_group.options` values.
     */
    public function selectOptions(): static
    {
        $this->selectField("options");

        return $this;
    }

    /**
     * The relative position of the selling plan group for display.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }

    /**
     * Product variants associated to the selling plan group.
     */
    public function selectProductVariants(?ShopifySellingPlanGroupProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A count of product variants associated to the selling plan group.
     */
    public function selectProductVariantsCount(?ShopifySellingPlanGroupProductVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Products associated to the selling plan group.
     */
    public function selectProducts(?ShopifySellingPlanGroupProductsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A count of products associated to the selling plan group.
     */
    public function selectProductsCount(?ShopifySellingPlanGroupProductsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Selling plans associated to the selling plan group.
     */
    public function selectSellingPlans(?ShopifySellingPlanGroupSellingPlansArgumentsObject $argsObject = null): ShopifySellingPlanConnectionQueryObject
    {
        $object = new ShopifySellingPlanConnectionQueryObject("sellingPlans");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A summary of the policies associated to the selling plan group.
     */
    public function selectSummary(): static
    {
        $this->selectField("summary");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifySellingPlanGroupTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
