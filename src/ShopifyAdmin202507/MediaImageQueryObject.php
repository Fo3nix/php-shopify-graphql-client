<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MediaImageQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaImage";

    public function selectAlt()
    {
        $this->selectField("alt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectFileErrors(MediaImageFileErrorsArgumentsObject $argsObject = null)
    {
        $object = new FileErrorQueryObject("fileErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFileStatus()
    {
        $this->selectField("fileStatus");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectImage(MediaImageImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaContentType()
    {
        $this->selectField("mediaContentType");

        return $this;
    }

    public function selectMediaErrors(MediaImageMediaErrorsArgumentsObject $argsObject = null)
    {
        $object = new MediaErrorQueryObject("mediaErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaWarnings(MediaImageMediaWarningsArgumentsObject $argsObject = null)
    {
        $object = new MediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated No longer supported. Use metaobjects instead.
     */
    public function selectMetafield(MediaImageMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated No longer supported. Use metaobjects instead.
     */
    public function selectMetafields(MediaImageMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMimeType()
    {
        $this->selectField("mimeType");

        return $this;
    }

    public function selectOriginalSource(MediaImageOriginalSourceArgumentsObject $argsObject = null)
    {
        $object = new MediaImageOriginalSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPreview(MediaImagePreviewArgumentsObject $argsObject = null)
    {
        $object = new MediaPreviewImageQueryObject("preview");
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

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
