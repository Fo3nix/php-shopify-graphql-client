<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductQueryObject extends QueryObject
{
    const OBJECT_NAME = "Product";

    public function selectAvailablePublicationsCount(ShopifyProductAvailablePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("availablePublicationsCount");
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

    public function selectBundleComponents(ShopifyProductBundleComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentConnectionQueryObject("bundleComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBundleConsolidatedOptions(ShopifyProductBundleConsolidatedOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyComponentizedProductsBundleConsolidatedOptionQueryObject("bundleConsolidatedOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCategory(ShopifyProductCategoryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("category");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCollections(ShopifyProductCollectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinedListing(ShopifyProductCombinedListingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCombinedListingQueryObject("combinedListing");
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

    public function selectCompareAtPriceRange(ShopifyProductCompareAtPriceRangeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductCompareAtPriceRangeQueryObject("compareAtPriceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContextualPricing(ShopifyProductContextualPricingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductContextualPricingQueryObject("contextualPricing");
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

    public function selectEvents(ShopifyProductEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `featuredMedia` instead.
     */
    public function selectFeaturedImage(ShopifyProductFeaturedImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("featuredImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeedback(ShopifyProductFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourceFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectGiftCardSettings(ShopifyProductGiftCardSettingsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyGiftCardProductSettingsQueryObject("giftCardSettings");
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
    public function selectImages(ShopifyProductImagesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageConnectionQueryObject("images");
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

    public function selectMedia(ShopifyProductMediaArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaConnectionQueryObject("media");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaCount(ShopifyProductMediaCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("mediaCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyProductMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyProductMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyProductMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
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

    public function selectOptions(ShopifyProductOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionQueryObject("options");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `priceRangeV2` instead.
     */
    public function selectPriceRange(ShopifyProductPriceRangeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPriceRangeQueryObject("priceRange");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceRangeV2(ShopifyProductPriceRangeV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPriceRangeV2QueryObject("priceRangeV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `category` instead.
     */
    public function selectProductCategory(ShopifyProductProductCategoryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductCategoryQueryObject("productCategory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductComponents(ShopifyProductProductComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductComponentTypeConnectionQueryObject("productComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductComponentsCount(ShopifyProductProductComponentsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productComponentsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductParents(ShopifyProductProductParentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("productParents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectProductPublications(ShopifyProductProductPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPublicationConnectionQueryObject("productPublications");
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
    public function selectPublications(ShopifyProductPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductPublicationConnectionQueryObject("publications");
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

    /**
     * @deprecated Use `publishedOnPublication` instead.
     */
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

    /**
     * @deprecated Use `resourcePublications` instead.
     */
    public function selectResourcePublicationOnCurrentPublication(ShopifyProductResourcePublicationOnCurrentPublicationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationV2QueryObject("resourcePublicationOnCurrentPublication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublications(ShopifyProductResourcePublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("resourcePublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsCount(ShopifyProductResourcePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("resourcePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsV2(ShopifyProductResourcePublicationsV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRestrictedForResource(ShopifyProductRestrictedForResourceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyRestrictedForResourceQueryObject("restrictedForResource");
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

    public function selectSellingPlanGroups(ShopifyProductSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroupsCount(ShopifyProductSellingPlanGroupsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("sellingPlanGroupsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSeo(ShopifyProductSeoArgumentsObject $argsObject = null)
    {
        $object = new ShopifySEOQueryObject("seo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `productCategory` instead.
     */
    public function selectStandardizedProductType(ShopifyProductStandardizedProductTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStandardizedProductTypeQueryObject("standardizedProductType");
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

    public function selectTranslations(ShopifyProductTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `unpublishedPublications` instead.
     */
    public function selectUnpublishedChannels(ShopifyProductUnpublishedChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelConnectionQueryObject("unpublishedChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnpublishedPublications(ShopifyProductUnpublishedPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPublicationConnectionQueryObject("unpublishedPublications");
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

    public function selectVariants(ShopifyProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("variants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantsCount(ShopifyProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("variantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantsInCollection(ShopifyProductVariantsInCollectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("variantsInCollection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantsInCollectionCount(ShopifyProductVariantsInCollectionCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("variantsInCollectionCount");
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
