<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyModel3dQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3d";

    public function selectAlt()
    {
        $this->selectField("alt");

        return $this;
    }

    public function selectBoundingBox(ShopifyModel3dBoundingBoxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyModel3dBoundingBoxQueryObject("boundingBox");
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

    public function selectFileErrors(ShopifyModel3dFileErrorsArgumentsObject $argsObject = null)
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

    public function selectMediaErrors(ShopifyModel3dMediaErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaErrorQueryObject("mediaErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaWarnings(ShopifyModel3dMediaWarningsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalSource(ShopifyModel3dOriginalSourceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyModel3dSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPreview(ShopifyModel3dPreviewArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSources(ShopifyModel3dSourcesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyModel3dSourceQueryObject("sources");
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
