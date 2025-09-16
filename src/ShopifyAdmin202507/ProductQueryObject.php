<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductQueryObject extends QueryObject
{
    const OBJECT_NAME = "Product";

    public function selectAvailablePublicationsCount(ProductAvailablePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("availablePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `descriptionHtml` instead.
     */
    public function selectBodyHtml()
    {
        $this->selectField("bodyHtml");

        return $this;
    }

    public function selectBundleComponents(ProductBundleComponentsArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentConnectionQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCategory(ProductCategoryArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryQueryObject("category");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(ProductCollectionsArgumentsObject $argsObject = null)
    {
        $object = new CollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinedListing(ProductCombinedListingArgumentsObject $argsObject = null)
    {
        $object = new CombinedListingQueryObject("combinedListing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinedListingRole()
    {
        $this->selectField("combinedListingRole");

        return $this;
    }

    public function selectCompareAtPriceRange(ProductCompareAtPriceRangeArgumentsObject $argsObject = null)
    {
        $object = new ProductCompareAtPriceRangeQueryObject("compareAtPriceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContextualPricing(ProductContextualPricingArgumentsObject $argsObject = null)
    {
        $object = new ProductContextualPricingQueryObject("contextualPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated Use `productType` instead.
     */
    public function selectCustomProductType()
    {
        $this->selectField("customProductType");

        return $this;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectDescriptionHtml()
    {
        $this->selectField("descriptionHtml");

        return $this;
    }

    /**
     * @deprecated Use `description` instead.
     */
    public function selectDescriptionPlainSummary()
    {
        $this->selectField("descriptionPlainSummary");

        return $this;
    }

    public function selectEvents(ProductEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `featuredMedia` instead.
     */
    public function selectFeaturedImage(ProductFeaturedImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("featuredImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeedback(ProductFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ResourceFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCardTemplateSuffix()
    {
        $this->selectField("giftCardTemplateSuffix");

        return $this;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectHasOnlyDefaultVariant()
    {
        $this->selectField("hasOnlyDefaultVariant");

        return $this;
    }

    public function selectHasOutOfStockVariants()
    {
        $this->selectField("hasOutOfStockVariants");

        return $this;
    }

    public function selectHasVariantsThatRequiresComponents()
    {
        $this->selectField("hasVariantsThatRequiresComponents");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use `media` instead.
     */
    public function selectImages(ProductImagesArgumentsObject $argsObject = null)
    {
        $object = new ImageConnectionQueryObject("images");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInCollection()
    {
        $this->selectField("inCollection");

        return $this;
    }

    public function selectIsGiftCard()
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectMedia(ProductMediaArgumentsObject $argsObject = null)
    {
        $object = new MediaConnectionQueryObject("media");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaCount(ProductMediaCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("mediaCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ProductMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ProductMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ProductMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOnlineStorePreviewUrl()
    {
        $this->selectField("onlineStorePreviewUrl");

        return $this;
    }

    public function selectOnlineStoreUrl()
    {
        $this->selectField("onlineStoreUrl");

        return $this;
    }

    public function selectOptions(ProductOptionsArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `priceRangeV2` instead.
     */
    public function selectPriceRange(ProductPriceRangeArgumentsObject $argsObject = null)
    {
        $object = new ProductPriceRangeQueryObject("priceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceRangeV2(ProductPriceRangeV2ArgumentsObject $argsObject = null)
    {
        $object = new ProductPriceRangeV2QueryObject("priceRangeV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `category` instead.
     */
    public function selectProductCategory(ProductProductCategoryArgumentsObject $argsObject = null)
    {
        $object = new ProductCategoryQueryObject("productCategory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductComponents(ProductProductComponentsArgumentsObject $argsObject = null)
    {
        $object = new ProductComponentTypeConnectionQueryObject("productComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductComponentsCount(ProductProductComponentsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productComponentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductParents(ProductProductParentsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("productParents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectProductPublications(ProductProductPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ProductPublicationConnectionQueryObject("productPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductType()
    {
        $this->selectField("productType");

        return $this;
    }

    /**
     * @deprecated Use `resourcePublicationsCount` instead.
     */
    public function selectPublicationCount()
    {
        $this->selectField("publicationCount");

        return $this;
    }

    /**
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectPublications(ProductPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ProductPublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPublishedAt()
    {
        $this->selectField("publishedAt");

        return $this;
    }

    public function selectPublishedInContext()
    {
        $this->selectField("publishedInContext");

        return $this;
    }

    /**
     * @deprecated Use `publishedOnPublication` instead.
     */
    public function selectPublishedOnChannel()
    {
        $this->selectField("publishedOnChannel");

        return $this;
    }

    /**
     * @deprecated Use `publishedOnCurrentPublication` instead.
     */
    public function selectPublishedOnCurrentChannel()
    {
        $this->selectField("publishedOnCurrentChannel");

        return $this;
    }

    public function selectPublishedOnCurrentPublication()
    {
        $this->selectField("publishedOnCurrentPublication");

        return $this;
    }

    public function selectPublishedOnPublication()
    {
        $this->selectField("publishedOnPublication");

        return $this;
    }

    public function selectRequiresSellingPlan()
    {
        $this->selectField("requiresSellingPlan");

        return $this;
    }

    public function selectResourcePublicationOnCurrentPublication(ProductResourcePublicationOnCurrentPublicationArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationV2QueryObject("resourcePublicationOnCurrentPublication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublications(ProductResourcePublicationsArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationConnectionQueryObject("resourcePublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsCount(ProductResourcePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("resourcePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsV2(ProductResourcePublicationsV2ArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRestrictedForResource(ProductRestrictedForResourceArgumentsObject $argsObject = null)
    {
        $object = new RestrictedForResourceQueryObject("restrictedForResource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `sellingPlanGroupsCount` instead.
     */
    public function selectSellingPlanGroupCount()
    {
        $this->selectField("sellingPlanGroupCount");

        return $this;
    }

    public function selectSellingPlanGroups(ProductSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroupsCount(ProductSellingPlanGroupsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("sellingPlanGroupsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSeo(ProductSeoArgumentsObject $argsObject = null)
    {
        $object = new SEOQueryObject("seo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `productCategory` instead.
     */
    public function selectStandardizedProductType(ProductStandardizedProductTypeArgumentsObject $argsObject = null)
    {
        $object = new StandardizedProductTypeQueryObject("standardizedProductType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * @deprecated Use `id` instead.
     */
    public function selectStorefrontId()
    {
        $this->selectField("storefrontId");

        return $this;
    }

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }

    public function selectTemplateSuffix()
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalInventory()
    {
        $this->selectField("totalInventory");

        return $this;
    }

    /**
     * @deprecated Use `variantsCount` instead.
     */
    public function selectTotalVariants()
    {
        $this->selectField("totalVariants");

        return $this;
    }

    public function selectTracksInventory()
    {
        $this->selectField("tracksInventory");

        return $this;
    }

    public function selectTranslations(ProductTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `unpublishedPublications` instead.
     */
    public function selectUnpublishedChannels(ProductUnpublishedChannelsArgumentsObject $argsObject = null)
    {
        $object = new ChannelConnectionQueryObject("unpublishedChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnpublishedPublications(ProductUnpublishedPublicationsArgumentsObject $argsObject = null)
    {
        $object = new PublicationConnectionQueryObject("unpublishedPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectVariants(ProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("variants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantsCount(ProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("variantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVendor()
    {
        $this->selectField("vendor");

        return $this;
    }
}
