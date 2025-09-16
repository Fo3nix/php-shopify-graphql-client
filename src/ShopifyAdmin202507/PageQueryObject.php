<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PageQueryObject extends QueryObject
{
    const OBJECT_NAME = "Page";

    public function selectBody()
    {
        $this->selectField("body");

        return $this;
    }

    public function selectBodySummary()
    {
        $this->selectField("bodySummary");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectEvents(PageEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
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

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsPublished()
    {
        $this->selectField("isPublished");

        return $this;
    }

    public function selectMetafield(PageMetafieldArgumentsObject $argsObject = null)
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
    public function selectMetafieldDefinitions(PageMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(PageMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectTranslations(PageTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
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
