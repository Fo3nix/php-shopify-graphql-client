<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class GenericFileQueryObject extends QueryObject
{
    const OBJECT_NAME = "GenericFile";

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

    public function selectFileErrors(GenericFileFileErrorsArgumentsObject $argsObject = null)
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

    public function selectMimeType()
    {
        $this->selectField("mimeType");

        return $this;
    }

    public function selectOriginalFileSize()
    {
        $this->selectField("originalFileSize");

        return $this;
    }

    public function selectPreview(GenericFilePreviewArgumentsObject $argsObject = null)
    {
        $object = new MediaPreviewImageQueryObject("preview");
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

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
