<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `Product` object lets you manage products in a merchant’s store.
 *
 * Products are the goods and services that merchants offer to customers. They can include various details such as title, description, price, images, and options such as size or color.
 * You can use [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/productvariant) to create or update different versions of the same product.
 * You can also add or update product [media](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/media).
 * Products can be organized by grouping them into a [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/collection).
 *
 * Learn more about working with [Shopify's product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/product-model-components),
 * including limitations and considerations.
 */
class ShopifyProductQueryObject extends QueryObject
{
    const OBJECT_NAME = "Product";

    /**
     * The number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, without
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     */
    public function selectAvailablePublicationsCount(?ShopifyProductAvailablePublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("availablePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The description of the product, with
     * HTML tags. For example, the description might include
     * bold `<strong></strong>` and italic `<i></i>` text.
     *
     * @deprecated Use `descriptionHtml` instead.
     */
    public function selectBodyHtml(): static
    {
        $this->selectField("bodyHtml");

        return $this;
    }

    /**
     * A list of [components](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-product-fixed-bundle)
     * that are associated with a product in a bundle.
     */
    public function selectBundleComponents(?ShopifyProductBundleComponentsArgumentsObject $argsObject = null): ShopifyProductBundleComponentConnectionQueryObject
    {
        $object = new ShopifyProductBundleComponentConnectionQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of consolidated options for a product in a bundle.
     */
    public function selectBundleConsolidatedOptions(?ShopifyProductBundleConsolidatedOptionsArgumentsObject $argsObject = null): ShopifyComponentizedProductsBundleConsolidatedOptionQueryObject
    {
        $object = new ShopifyComponentizedProductsBundleConsolidatedOptionQueryObject("bundleConsolidatedOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The category of a product
     * from [Shopify's Standard Product Taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17).
     */
    public function selectCategory(?ShopifyProductCategoryArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryQueryObject
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("category");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection)
     * that include the product.
     */
    public function selectCollections(?ShopifyProductCollectionsArgumentsObject $argsObject = null): ShopifyCollectionConnectionQueryObject
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A special product type that combines separate products from a store into a single product listing.
     * [Combined listings](https://shopify.dev/apps/build/product-merchandising/combined-listings) are connected
     * by a shared option, such as color, model, or dimension.
     */
    public function selectCombinedListing(?ShopifyProductCombinedListingArgumentsObject $argsObject = null): ShopifyCombinedListingQueryObject
    {
        $object = new ShopifyCombinedListingQueryObject("combinedListing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [role of the product](https://shopify.dev/docs/apps/build/product-merchandising/combined-listings/build-for-combined-listings)
     * in a combined listing.
     *
     * If `null`, then the product isn't part of any combined listing.
     */
    public function selectCombinedListingRole(): static
    {
        $this->selectField("combinedListingRole");

        return $this;
    }

    /**
     * The [compare-at price range](https://help.shopify.com/manual/products/details/product-pricing/sale-pricing)
     * of the product in the shop's default currency.
     */
    public function selectCompareAtPriceRange(?ShopifyProductCompareAtPriceRangeArgumentsObject $argsObject = null): ShopifyProductCompareAtPriceRangeQueryObject
    {
        $object = new ShopifyProductCompareAtPriceRangeQueryObject("compareAtPriceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The pricing that applies to a customer in a specific context. For example, a price might vary depending on the customer's location. Only active markets are considered in the price resolution.
     */
    public function selectContextualPricing(ShopifyProductContextualPricingArgumentsObject $argsObject): ShopifyProductContextualPricingQueryObject
    {
        $object = new ShopifyProductContextualPricingQueryObject("contextualPricing");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the product was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The custom product type specified by the merchant.
     *
     * @deprecated Use `productType` instead.
     */
    public function selectCustomProductType(): static
    {
        $this->selectField("customProductType");

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
     * A single-line description of the product,
     * with [HTML tags](https://developer.mozilla.org/en-US/docs/Web/HTML) removed.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * The description of the product, with
     * HTML tags. For example, the description might include
     * bold `<strong></strong>` and italic `<i></i>` text.
     */
    public function selectDescriptionHtml(): static
    {
        $this->selectField("descriptionHtml");

        return $this;
    }

    /**
     * Stripped description of the product, single line with HTML tags removed.
     * Truncated to 60 characters.
     *
     * @deprecated Use `description` instead.
     */
    public function selectDescriptionPlainSummary(): static
    {
        $this->selectField("descriptionPlainSummary");

        return $this;
    }

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyProductEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The featured image for the product.
     *
     * @deprecated Use `featuredMedia` instead.
     */
    public function selectFeaturedImage(?ShopifyProductFeaturedImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("featuredImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The featured [media](https://shopify.dev/docs/apps/build/online-store/product-media)
     * associated with the product.
     */
    public function selectFeaturedMedia(?ShopifyProductFeaturedMediaArgumentsObject $argsObject = null): ShopifyMediaInterfaceObject
    {
        $object = new ShopifyMediaInterfaceObject("featuredMedia");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The information that lets merchants know what steps they need to take
     * to make sure that the app is set up correctly.
     *
     * For example, if a merchant hasn't set up a product correctly in the app,
     * then the feedback might include a message that says "You need to add a price
     * to this product".
     */
    public function selectFeedback(?ShopifyProductFeedbackArgumentsObject $argsObject = null): ShopifyResourceFeedbackQueryObject
    {
        $object = new ShopifyResourceFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [theme template](https://shopify.dev/docs/storefronts/themes/architecture/templates) that's used when customers view the gift card in a store.
     */
    public function selectGiftCardTemplateSuffix(): static
    {
        $this->selectField("giftCardTemplateSuffix");

        return $this;
    }

    /**
     * A unique, human-readable string of the product's title. A handle can contain letters, hyphens (`-`), and numbers, but no spaces.
     * The handle is used in the online store URL for the product.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Whether the product has only a single variant with the default option and value.
     */
    public function selectHasOnlyDefaultVariant(): static
    {
        $this->selectField("hasOnlyDefaultVariant");

        return $this;
    }

    /**
     * Whether the product has variants that are out of stock.
     */
    public function selectHasOutOfStockVariants(): static
    {
        $this->selectField("hasOutOfStockVariants");

        return $this;
    }

    /**
     * Whether at least one of the product variants requires
     * [bundle components](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-product-fixed-bundle).
     *
     * Learn more about
     * [store eligibility for bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles#store-eligibility).
     */
    public function selectHasVariantsThatRequiresComponents(): static
    {
        $this->selectField("hasVariantsThatRequiresComponents");

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
     * The images associated with the product.
     *
     * @deprecated Use `media` instead.
     */
    public function selectImages(?ShopifyProductImagesArgumentsObject $argsObject = null): ShopifyImageConnectionQueryObject
    {
        $object = new ShopifyImageConnectionQueryObject("images");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the product
     * is in a specified
     * [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/collection).
     */
    public function selectInCollection(): static
    {
        $this->selectField("inCollection");

        return $this;
    }

    /**
     * Whether the product is a gift card.
     */
    public function selectIsGiftCard(): static
    {
        $this->selectField("isGiftCard");

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
     * The [media](https://shopify.dev/docs/apps/build/online-store/product-media) associated with the product. Valid media are images, 3D models, videos.
     */
    public function selectMedia(?ShopifyProductMediaArgumentsObject $argsObject = null): ShopifyMediaConnectionQueryObject
    {
        $object = new ShopifyMediaConnectionQueryObject("media");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total count of [media](https://shopify.dev/docs/apps/build/online-store/product-media)
     * that's associated with a product.
     */
    public function selectMediaCount(?ShopifyProductMediaCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("mediaCount");
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
    public function selectMetafield(ShopifyProductMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
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
    public function selectMetafieldDefinitions(?ShopifyProductMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
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
    public function selectMetafields(?ShopifyProductMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [preview URL](https://help.shopify.com/manual/online-store/setting-up#preview-your-store) for the online store.
     */
    public function selectOnlineStorePreviewUrl(): static
    {
        $this->selectField("onlineStorePreviewUrl");

        return $this;
    }

    /**
     * The product's URL on the online store.
     * If `null`, then the product isn't published to the online store sales channel.
     */
    public function selectOnlineStoreUrl(): static
    {
        $this->selectField("onlineStoreUrl");

        return $this;
    }

    /**
     * A list of product options. The limit is defined by the
     * [shop's resource limits for product options](https://shopify.dev/docs/api/admin-graphql/latest/objects/Shop#field-resourcelimits) (`Shop.resourceLimits.maxProductOptions`).
     */
    public function selectOptions(?ShopifyProductOptionsArgumentsObject $argsObject = null): ShopifyProductOptionQueryObject
    {
        $object = new ShopifyProductOptionQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price range of the product.
     *
     * @deprecated Use `priceRangeV2` instead.
     */
    public function selectPriceRange(?ShopifyProductPriceRangeArgumentsObject $argsObject = null): ShopifyProductPriceRangeQueryObject
    {
        $object = new ShopifyProductPriceRangeQueryObject("priceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The minimum and maximum prices of a product, expressed in decimal numbers.
     * For example, if the product is priced between $10.00 and $50.00,
     * then the price range is $10.00 - $50.00.
     */
    public function selectPriceRangeV2(?ShopifyProductPriceRangeV2ArgumentsObject $argsObject = null): ShopifyProductPriceRangeV2QueryObject
    {
        $object = new ShopifyProductPriceRangeV2QueryObject("priceRangeV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product category specified by the merchant.
     *
     * @deprecated Use `category` instead.
     */
    public function selectProductCategory(?ShopifyProductProductCategoryArgumentsObject $argsObject = null): ShopifyProductCategoryQueryObject
    {
        $object = new ShopifyProductCategoryQueryObject("productCategory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of products that contain at least one variant associated with
     * at least one of the current products' variants via group relationship.
     */
    public function selectProductComponents(?ShopifyProductProductComponentsArgumentsObject $argsObject = null): ShopifyProductComponentTypeConnectionQueryObject
    {
        $object = new ShopifyProductComponentTypeConnectionQueryObject("productComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A count of unique products that contain at least one variant associated with
     * at least one of the current products' variants via group relationship.
     */
    public function selectProductComponentsCount(?ShopifyProductProductComponentsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productComponentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of products that has a variant that contains any of this product's variants as a component.
     */
    public function selectProductParents(?ShopifyProductProductParentsArgumentsObject $argsObject = null): ShopifyProductConnectionQueryObject
    {
        $object = new ShopifyProductConnectionQueryObject("productParents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the channels where the product is published.
     *
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectProductPublications(?ShopifyProductProductPublicationsArgumentsObject $argsObject = null): ShopifyProductPublicationConnectionQueryObject
    {
        $object = new ShopifyProductPublicationConnectionQueryObject("productPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [product type](https://help.shopify.com/manual/products/details/product-type)
     * that merchants define.
     */
    public function selectProductType(): static
    {
        $this->selectField("productType");

        return $this;
    }

    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     *
     * @deprecated Use `resourcePublicationsCount` instead.
     */
    public function selectPublicationCount(): static
    {
        $this->selectField("publicationCount");

        return $this;
    }

    /**
     * A list of the channels where the product is published.
     *
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectPublications(?ShopifyProductPublicationsArgumentsObject $argsObject = null): ShopifyProductPublicationConnectionQueryObject
    {
        $object = new ShopifyProductPublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the product was published to the online store.
     */
    public function selectPublishedAt(): static
    {
        $this->selectField("publishedAt");

        return $this;
    }

    /**
     * Whether the product is published for a customer only in a specified context. For example, a product might be published for a customer only in a specific location.
     */
    public function selectPublishedInContext(): static
    {
        $this->selectField("publishedInContext");

        return $this;
    }

    /**
     * Whether the resource is published to a specific channel.
     *
     * @deprecated Use `publishedOnPublication` instead.
     */
    public function selectPublishedOnChannel(): static
    {
        $this->selectField("publishedOnChannel");

        return $this;
    }

    /**
     * Whether the resource is published to a
     * [channel](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel).
     * For example, the resource might be published to the online store channel.
     *
     * @deprecated Use `publishedOnCurrentPublication` instead.
     */
    public function selectPublishedOnCurrentChannel(): static
    {
        $this->selectField("publishedOnCurrentChannel");

        return $this;
    }

    /**
     * Whether the resource is published to the app's
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * For example, the resource might be published to the app's online store channel.
     *
     * @deprecated Use `publishedOnPublication` instead.
     */
    public function selectPublishedOnCurrentPublication(): static
    {
        $this->selectField("publishedOnCurrentPublication");

        return $this;
    }

    /**
     * Whether the resource is published to a specified
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     */
    public function selectPublishedOnPublication(): static
    {
        $this->selectField("publishedOnPublication");

        return $this;
    }

    /**
     * Whether the product can only be purchased with
     * a [selling plan](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans).
     * Products that are sold on subscription (`requiresSellingPlan: true`) can be updated only for online stores.
     * If you update a product to be subscription-only (`requiresSellingPlan: true`), then the product is unpublished from all channels, except the online store.
     */
    public function selectRequiresSellingPlan(): static
    {
        $this->selectField("requiresSellingPlan");

        return $this;
    }

    /**
     * The resource that's either published or staged to be published to
     * the [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectResourcePublicationOnCurrentPublication(?ShopifyProductResourcePublicationOnCurrentPublicationArgumentsObject $argsObject = null): ShopifyResourcePublicationV2QueryObject
    {
        $object = new ShopifyResourcePublicationV2QueryObject("resourcePublicationOnCurrentPublication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of resources that are published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     */
    public function selectResourcePublications(?ShopifyProductResourcePublicationsArgumentsObject $argsObject = null): ShopifyResourcePublicationConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("resourcePublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of
     * [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that a resource is published to, including publications with
     * [feedback errors](https://shopify.dev/docs/api/admin-graphql/latest/objects/ResourceFeedback).
     * To get a count that excludes publications with feedback errors, use `availablePublicationsCount`.
     */
    public function selectResourcePublicationsCount(?ShopifyProductResourcePublicationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("resourcePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of resources that are either published or staged to be published to a
     * [publication](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     * By default, only publications to `APP` catalog types are returned.
     * For `Product` and `ProductVariant`, use the `catalogType` argument to retrieve
     * publications for other catalog types, such as `COMPANY_LOCATION` (B2B) or `MARKET`.
     * `Collection` only supports publications to `APP` catalog types.
     */
    public function selectResourcePublicationsV2(?ShopifyProductResourcePublicationsV2ArgumentsObject $argsObject = null): ShopifyResourcePublicationV2ConnectionQueryObject
    {
        $object = new ShopifyResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the merchant can make changes to the product when they
     * [edit the order](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders)
     * associated with the product. For example, a merchant might be restricted from changing product details when they
     * edit an order.
     */
    public function selectRestrictedForResource(ShopifyProductRestrictedForResourceArgumentsObject $argsObject): ShopifyRestrictedForResourceQueryObject
    {
        $object = new ShopifyRestrictedForResourceQueryObject("restrictedForResource");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A count of [selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan)
     * that are associated with the product.
     *
     * @deprecated Use `sellingPlanGroupsCount` instead.
     */
    public function selectSellingPlanGroupCount(): static
    {
        $this->selectField("sellingPlanGroupCount");

        return $this;
    }

    /**
     * A list of all [selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan)
     * that are associated with the product either directly, or through the product's variants.
     */
    public function selectSellingPlanGroups(?ShopifyProductSellingPlanGroupsArgumentsObject $argsObject = null): ShopifySellingPlanGroupConnectionQueryObject
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A count of [selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan)
     * that are associated with the product.
     */
    public function selectSellingPlanGroupsCount(?ShopifyProductSellingPlanGroupsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("sellingPlanGroupsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [SEO title and description](https://help.shopify.com/manual/promoting-marketing/seo/adding-keywords)
     * that are associated with a product.
     */
    public function selectSeo(?ShopifyProductSeoArgumentsObject $argsObject = null): ShopifySEOQueryObject
    {
        $object = new ShopifySEOQueryObject("seo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The standardized product type in the Shopify product taxonomy.
     *
     * @deprecated Use `productCategory` instead.
     */
    public function selectStandardizedProductType(?ShopifyProductStandardizedProductTypeArgumentsObject $argsObject = null): ShopifyStandardizedProductTypeQueryObject
    {
        $object = new ShopifyStandardizedProductTypeQueryObject("standardizedProductType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The [product status](https://help.shopify.com/manual/products/details/product-details-page#product-status),
     * which controls visibility across all sales channels.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The Storefront GraphQL API ID of the `Product`.
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
     * A comma-separated list of searchable keywords that are
     * associated with the product. For example, a merchant might apply the `sports`
     * and `summer` tags to products that are associated with sportwear for summer.
     *
     * Updating `tags` overwrites
     * any existing tags that were previously added to the product. To add new tags without overwriting
     * existing tags, use the [`tagsAdd`](https://shopify.dev/api/admin-graphql/latest/mutations/tagsadd)
     * mutation.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * The [theme template](https://shopify.dev/docs/storefronts/themes/architecture/templates) that's used when customers view the product in a store.
     */
    public function selectTemplateSuffix(): static
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    /**
     * The name for the product that displays to customers. The title is used to construct the product's handle.
     * For example, if a product is titled "Black Sunglasses", then the handle is `black-sunglasses`.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The quantity of inventory that's in stock.
     */
    public function selectTotalInventory(): static
    {
        $this->selectField("totalInventory");

        return $this;
    }

    /**
     * The number of [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * that are associated with the product.
     *
     * @deprecated Use `variantsCount` instead.
     */
    public function selectTotalVariants(): static
    {
        $this->selectField("totalVariants");

        return $this;
    }

    /**
     * Whether [inventory tracking](https://help.shopify.com/manual/products/inventory/getting-started-with-inventory/set-up-inventory-tracking)
     * has been enabled for the product.
     */
    public function selectTracksInventory(): static
    {
        $this->selectField("tracksInventory");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyProductTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of channels that the resource is not published to.
     *
     * @deprecated Use `unpublishedPublications` instead.
     */
    public function selectUnpublishedChannels(?ShopifyProductUnpublishedChannelsArgumentsObject $argsObject = null): ShopifyChannelConnectionQueryObject
    {
        $object = new ShopifyChannelConnectionQueryObject("unpublishedChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)
     * that the resource isn't published to.
     */
    public function selectUnpublishedPublications(?ShopifyProductUnpublishedPublicationsArgumentsObject $argsObject = null): ShopifyPublicationConnectionQueryObject
    {
        $object = new ShopifyPublicationConnectionQueryObject("unpublishedPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the product was last modified.
     * A product's `updatedAt` value can change for different reasons. For example, if an order
     * is placed for a product that has inventory tracking set up, then the inventory adjustment
     * is counted as an update.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * A list of [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) associated with the product.
     * If querying a single product at the root, you can fetch up to 2048 variants.
     */
    public function selectVariants(?ShopifyProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("variants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * that are associated with the product.
     */
    public function selectVariantsCount(?ShopifyProductVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("variantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the product's vendor.
     */
    public function selectVendor(): static
    {
        $this->selectField("vendor");

        return $this;
    }
}
