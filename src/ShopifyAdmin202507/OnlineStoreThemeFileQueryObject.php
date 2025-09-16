<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFile";

    public function selectBody(OnlineStoreThemeFileBodyArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeFileBodyUnionObject("body");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChecksumMd5()
    {
        $this->selectField("checksumMd5");

        return $this;
    }

    public function selectContentType()
    {
        $this->selectField("contentType");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectFilename()
    {
        $this->selectField("filename");

        return $this;
    }

    public function selectSize()
    {
        $this->selectField("size");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
