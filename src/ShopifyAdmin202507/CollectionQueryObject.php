<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "Collection";

    public function selectAvailablePublicationsCount(CollectionAvailablePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("availablePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectEvents(CollectionEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFeedback(CollectionFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ResourceFeedbackQueryObject("feedback");
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

    public function selectImage(CollectionImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
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

    public function selectMetafield(CollectionMetafieldArgumentsObject $argsObject = null)
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
    public function selectMetafieldDefinitions(CollectionMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(CollectionMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(CollectionProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(CollectionProductsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productsCount");
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
    public function selectPublications(CollectionPublicationsArgumentsObject $argsObject = null)
    {
        $object = new CollectionPublicationConnectionQueryObject("publications");
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

    public function selectResourcePublications(CollectionResourcePublicationsArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationConnectionQueryObject("resourcePublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsCount(CollectionResourcePublicationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("resourcePublicationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourcePublicationsV2(CollectionResourcePublicationsV2ArgumentsObject $argsObject = null)
    {
        $object = new ResourcePublicationV2ConnectionQueryObject("resourcePublicationsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRuleSet(CollectionRuleSetArgumentsObject $argsObject = null)
    {
        $object = new CollectionRuleSetQueryObject("ruleSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSeo(CollectionSeoArgumentsObject $argsObject = null)
    {
        $object = new SEOQueryObject("seo");
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

    public function selectTranslations(CollectionTranslationsArgumentsObject $argsObject = null)
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
    public function selectUnpublishedChannels(CollectionUnpublishedChannelsArgumentsObject $argsObject = null)
    {
        $object = new ChannelConnectionQueryObject("unpublishedChannels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnpublishedPublications(CollectionUnpublishedPublicationsArgumentsObject $argsObject = null)
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
}
