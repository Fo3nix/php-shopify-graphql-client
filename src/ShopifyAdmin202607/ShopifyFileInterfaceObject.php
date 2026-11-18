<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A file interface.
 */
class ShopifyFileInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "File";

    /**
     * A word or phrase to describe the contents or the function of a file.
     */
    public function selectAlt(): static
    {
        $this->selectField("alt");

        return $this;
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
    public function selectFileErrors(?ShopifyFileFileErrorsArgumentsObject $argsObject = null): ShopifyFileErrorQueryObject
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
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyFilePreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function onExternalVideo(): ShopifyExternalVideoQueryObject
    {
        $object = new ShopifyExternalVideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGenericFile(): ShopifyGenericFileQueryObject
    {
        $object = new ShopifyGenericFileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMediaImage(): ShopifyMediaImageQueryObject
    {
        $object = new ShopifyMediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onModel3d(): ShopifyModel3dQueryObject
    {
        $object = new ShopifyModel3dQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onVideo(): ShopifyVideoQueryObject
    {
        $object = new ShopifyVideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
