<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "Collection";

    public function selectActiveOperations(ShopifyCollectionActiveOperationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionOperationsQueryObject("activeOperations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailablePublicationsCount(ShopifyCollectionAvailablePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("availablePublicationsCount");
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

    public function selectEvents(ShopifyCollectionEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeedback(ShopifyCollectionFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourceFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectHasProduct()
    {
        $this->selectField("hasProduct");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(ShopifyCollectionImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectMetafield(ShopifyCollectionMetafieldArgumentsObject $argsObject = null)
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
    public function selectMetafieldDefinitions(ShopifyCollectionMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyCollectionMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ShopifyCollectionProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(ShopifyCollectionProductsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
    public function selectPublications(ShopifyCollectionPublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionPublicationConnectionQueryObject("publications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectResourcePublications(ShopifyCollectionResourcePublicationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationConnectionQueryObject("resourcePublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsCount(ShopifyCollectionResourcePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("resourcePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsV2(ShopifyCollectionResourcePublicationsV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRuleSet(ShopifyCollectionRuleSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionRuleSetQueryObject("ruleSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSeo(ShopifyCollectionSeoArgumentsObject $argsObject = null)
    {
        $object = new ShopifySEOQueryObject("seo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSortOrder()
    {
        $this->selectField("sortOrder");

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

    public function selectTranslations(ShopifyCollectionTranslationsArgumentsObject $argsObject = null)
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
    public function selectUnpublishedChannels(ShopifyCollectionUnpublishedChannelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyChannelConnectionQueryObject("unpublishedChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnpublishedPublications(ShopifyCollectionUnpublishedPublicationsArgumentsObject $argsObject = null)
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
}
