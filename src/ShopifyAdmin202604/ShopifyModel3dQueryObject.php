<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Shopify hosted 3D model.
 */
class ShopifyModel3dQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3d";

    /**
     * A word or phrase to describe the contents or the function of a file.
     */
    public function selectAlt(): static
    {
        $this->selectField("alt");

        return $this;
    }

    /**
     * The 3d model's bounding box information.
     */
    public function selectBoundingBox(?ShopifyModel3dBoundingBoxArgumentsObject $argsObject = null): ShopifyModel3dBoundingBoxQueryObject
    {
        $object = new ShopifyModel3dBoundingBoxQueryObject("boundingBox");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Any errors that have occurred on the file.
     */
    public function selectFileErrors(?ShopifyModel3dFileErrorsArgumentsObject $argsObject = null): ShopifyFileErrorQueryObject
    {
        $object = new ShopifyFileErrorQueryObject("fileErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of the file.
     */
    public function selectFileStatus(): static
    {
        $this->selectField("fileStatus");

        return $this;
    }

    /**
     * The 3d model's filename.
     */
    public function selectFilename(): static
    {
        $this->selectField("filename");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The media content type.
     */
    public function selectMediaContentType(): static
    {
        $this->selectField("mediaContentType");

        return $this;
    }

    /**
     * Any errors which have occurred on the media.
     */
    public function selectMediaErrors(?ShopifyModel3dMediaErrorsArgumentsObject $argsObject = null): ShopifyMediaErrorQueryObject
    {
        $object = new ShopifyMediaErrorQueryObject("mediaErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The warnings attached to the media.
     */
    public function selectMediaWarnings(?ShopifyModel3dMediaWarningsArgumentsObject $argsObject = null): ShopifyMediaWarningQueryObject
    {
        $object = new ShopifyMediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The 3d model's original source.
     */
    public function selectOriginalSource(?ShopifyModel3dOriginalSourceArgumentsObject $argsObject = null): ShopifyModel3dSourceQueryObject
    {
        $object = new ShopifyModel3dSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyModel3dPreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The 3d model's sources.
     */
    public function selectSources(?ShopifyModel3dSourcesArgumentsObject $argsObject = null): ShopifyModel3dSourceQueryObject
    {
        $object = new ShopifyModel3dSourceQueryObject("sources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Current status of the media.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
