<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class Model3dQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3d";

    public function selectAlt()
    {
        $this->selectField("alt");

        return $this;
    }

    public function selectBoundingBox(Model3dBoundingBoxArgumentsObject $argsObject = null)
    {
        $object = new Model3dBoundingBoxQueryObject("boundingBox");
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

    public function selectFileErrors(Model3dFileErrorsArgumentsObject $argsObject = null)
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

    public function selectMediaErrors(Model3dMediaErrorsArgumentsObject $argsObject = null)
    {
        $object = new MediaErrorQueryObject("mediaErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMediaWarnings(Model3dMediaWarningsArgumentsObject $argsObject = null)
    {
        $object = new MediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalSource(Model3dOriginalSourceArgumentsObject $argsObject = null)
    {
        $object = new Model3dSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPreview(Model3dPreviewArgumentsObject $argsObject = null)
    {
        $object = new MediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSources(Model3dSourcesArgumentsObject $argsObject = null)
    {
        $object = new Model3dSourceQueryObject("sources");
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
