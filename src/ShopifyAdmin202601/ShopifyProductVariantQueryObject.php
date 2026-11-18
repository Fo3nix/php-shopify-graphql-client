<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `ProductVariant` object represents a version of a
 * [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
 * that comes in more than one [option](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption),
 * such as size or color. For example, if a merchant sells t-shirts with options for size and color, then a small,
 * blue t-shirt would be one product variant and a large, blue t-shirt would be another.
 *
 * Use the `ProductVariant` object to manage the full lifecycle and configuration of a product's variants. Common
 * use cases for using the `ProductVariant` object include:
 *
 * - Tracking inventory for each variant
 * - Setting unique prices for each variant
 * - Assigning barcodes and SKUs to connect variants to fulfillment services
 * - Attaching variant-specific images and media
 * - Setting delivery and tax requirements
 * - Supporting product bundles, subscriptions, and selling plans
 *
 * A `ProductVariant` is associated with a parent
 * [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) object.
 * `ProductVariant` serves as the central link between a product's merchandising configuration, inventory,
 * pricing, fulfillment, and sales channels within the GraphQL Admin API schema. Each variant
 * can reference other GraphQL types such as:
 *
 * - [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem): Used for inventory tracking
 * - [`Image`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Image): Used for variant-specific images
 * - [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup): Used for subscriptions and selling plans
 *
 * Learn more about [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components).
 */
class ShopifyProductVariantQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariant";

    /**
     * Whether the product variant is available for sale.
     */
    public function selectAvailableForSale(): static
    {
        $this->selectField("availableForSale");

        return $this;
    }

    /**
     * The value of the barcode associated with the product.
     */
    public function selectBarcode(): static
    {
        $this->selectField("barcode");

        return $this;
    }

    /**
     * The compare-at price of the variant in the default shop currency.
     */
    public function selectCompareAtPrice(): static
    {
        $this->selectField("compareAtPrice");

        return $this;
    }

    /**
     * The pricing that applies for a customer in a given context. As of API version 2025-04, only active markets are considered in the price resolution.
     */
    public function selectContextualPricing(ShopifyProductVariantContextualPricingArgumentsObject $argsObject): ShopifyProductVariantContextualPricingQueryObject
    {
        $object = new ShopifyProductVariantContextualPricingQueryObject("contextualPricing");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the variant was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * The [delivery profile](https://shopify.dev/api/admin-graphql/latest/objects/DeliveryProfile) for the variant.
     */
    public function selectDeliveryProfile(?ShopifyProductVariantDeliveryProfileArgumentsObject $argsObject = null): ShopifyDeliveryProfileQueryObject
    {
        $object = new ShopifyDeliveryProfileQueryObject("deliveryProfile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Display name of the variant, based on product's title + variant's title.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyProductVariantEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The featured image for the variant.
     *
     * @deprecated Use `media` instead.
     */
    public function selectImage(?ShopifyProductVariantImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The inventory item, which is used to query for inventory information.
     */
    public function selectInventoryItem(?ShopifyProductVariantInventoryItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether customers are allowed to place an order for the product variant when it's out of stock.
     */
    public function selectInventoryPolicy(): static
    {
        $this->selectField("inventoryPolicy");

        return $this;
    }

    /**
     * The total sellable quantity of the variant.
     */
    public function selectInventoryQuantity(): static
    {
        $this->selectField("inventoryQuantity");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The media associated with the product variant.
     */
    public function selectMedia(?ShopifyProductVariantMediaArgumentsObject $argsObject = null): ShopifyMediaConnectionQueryObject
    {
        $object = new ShopifyMediaConnectionQueryObject("media");
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
    public function selectMetafield(ShopifyProductVariantMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
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
    public function selectMetafieldDefinitions(?ShopifyProductVariantMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
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
    public function selectMetafields(?ShopifyProductVariantMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order of the product variant in the list of product variants. The first position in the list is 1.
     */
    public function selectPosition(): static
    {
        $this->selectField("position");

        return $this;
    }

    /**
     * List of prices and compare-at prices in the presentment currencies for this shop.
     *
     * @deprecated Use `contextualPricing` instead.
     */
    public function selectPresentmentPrices(?ShopifyProductVariantPresentmentPricesArgumentsObject $argsObject = null): ShopifyProductVariantPricePairConnectionQueryObject
    {
        $object = new ShopifyProductVariantPricePairConnectionQueryObject("presentmentPrices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price of the product variant in the default shop currency.
     */
    public function selectPrice(): static
    {
        $this->selectField("price");

        return $this;
    }

    /**
     * The product that this variant belongs to.
     */
    public function selectProduct(?ShopifyProductVariantProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of products that have product variants that contain this variant as a product component.
     */
    public function selectProductParents(?ShopifyProductVariantProductParentsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("productParents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the product variant components.
     */
    public function selectProductVariantComponents(?ShopifyProductVariantProductVariantComponentsArgumentsObject $argsObject = null): ShopifyProductVariantComponentConnectionQueryObject
    {
        $object = new ShopifyProductVariantComponentConnectionQueryObject("productVariantComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether a product variant requires components. The default value is `false`.
     * If `true`, then the product variant can only be purchased as a parent bundle with components and it will be omitted
     * from channels that don't support bundles.
     */
    public function selectRequiresComponents(): static
    {
        $this->selectField("requiresComponents");

        return $this;
    }

    /**
     * List of product options applied to the variant.
     */
    public function selectSelectedOptions(?ShopifyProductVariantSelectedOptionsArgumentsObject $argsObject = null): ShopifySelectedOptionQueryObject
    {
        $object = new ShopifySelectedOptionQueryObject("selectedOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total sellable quantity of the variant for online channels.
     * This doesn't represent the total available inventory or capture
     * [limitations based on customer location](https://help.shopify.com/manual/markets/inventory_and_fulfillment).
     */
    public function selectSellableOnlineQuantity(): static
    {
        $this->selectField("sellableOnlineQuantity");

        return $this;
    }

    /**
     * Count of selling plan groups associated with the product variant.
     *
     * @deprecated Use `sellingPlanGroupsCount` instead.
     */
    public function selectSellingPlanGroupCount(): static
    {
        $this->selectField("sellingPlanGroupCount");

        return $this;
    }

    /**
     * A list of all selling plan groups defined in the current shop associated with the product variant.
     */
    public function selectSellingPlanGroups(?ShopifyProductVariantSellingPlanGroupsArgumentsObject $argsObject = null): ShopifySellingPlanGroupConnectionQueryObject
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Count of selling plan groups associated with the product variant.
     */
    public function selectSellingPlanGroupsCount(?ShopifyProductVariantSellingPlanGroupsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("sellingPlanGroupsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether to show the unit price for this product variant.
     */
    public function selectShowUnitPrice(): static
    {
        $this->selectField("showUnitPrice");

        return $this;
    }

    /**
     * A case-sensitive identifier for the product variant in the shop.
     * Required in order to connect to a fulfillment service.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * The Storefront GraphQL API ID of the `ProductVariant`.
     *
     * The Storefront GraphQL API will no longer return Base64 encoded IDs to match the behavior of the Admin GraphQL API. Therefore, you can safely use the `id` field's value instead.
     *
     * @deprecated Use `id` instead.
     */
    public function selectStorefrontId(): static
    {
        $this->selectField("storefrontId");

        return $this;
    }

    /**
     * Avalara tax code for the product variant. Applies only to the stores that have the Avalara AvaTax app installed.
     *
     * @deprecated This field should no longer be used in new integrations. This field will not be available in future API versions.
     */
    public function selectTaxCode(): static
    {
        $this->selectField("taxCode");

        return $this;
    }

    /**
     * Whether a tax is charged when the product variant is sold.
     */
    public function selectTaxable(): static
    {
        $this->selectField("taxable");

        return $this;
    }

    /**
     * The title of the product variant.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyProductVariantTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit price value for the variant based on the variant measurement.
     */
    public function selectUnitPrice(?ShopifyProductVariantUnitPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("unitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit price measurement for the variant.
     */
    public function selectUnitPriceMeasurement(?ShopifyProductVariantUnitPriceMeasurementArgumentsObject $argsObject = null): ShopifyUnitPriceMeasurementQueryObject
    {
        $object = new ShopifyUnitPriceMeasurementQueryObject("unitPriceMeasurement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time (ISO 8601 format) when the product variant was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
