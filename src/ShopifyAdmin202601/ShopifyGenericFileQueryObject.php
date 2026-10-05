<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyGenericFileQueryObject extends QueryObject
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

    public function selectFileErrors(ShopifyGenericFileFileErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFileErrorQueryObject("fileErrors");
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

    public function selectPreview(ShopifyGenericFilePreviewArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
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
