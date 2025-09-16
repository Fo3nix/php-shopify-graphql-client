<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class VideoQueryObject extends QueryObject
{
    const OBJECT_NAME = "Video";

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

    public function selectDuration()
    {
        $this->selectField("duration");

        return $this;
    }

    public function selectFileErrors(VideoFileErrorsArgumentsObject $argsObject = null)
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

    public function selectFilename()
    {
        $this->selectField("filename");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMediaContentType()
    {
        $this->selectField("mediaContentType");

        return $this;
    }

    public function selectMediaErrors(VideoMediaErrorsArgumentsObject $argsObject = null)
    {
        $object = new MediaErrorQueryObject("mediaErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaWarnings(VideoMediaWarningsArgumentsObject $argsObject = null)
    {
        $object = new MediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalSource(VideoOriginalSourceArgumentsObject $argsObject = null)
    {
        $object = new VideoSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPreview(VideoPreviewArgumentsObject $argsObject = null)
    {
        $object = new MediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSources(VideoSourcesArgumentsObject $argsObject = null)
    {
        $object = new VideoSourceQueryObject("sources");
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
