<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents a media interface.
 */
class ShopifyMediaInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Media";

    /**
     * A word or phrase to share the nature or contents of a media.
     */
    public function selectAlt(): static
    {
        $this->selectField("alt");

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
    public function selectMediaErrors(?ShopifyMediaMediaErrorsArgumentsObject $argsObject = null): ShopifyMediaErrorQueryObject
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
    public function selectMediaWarnings(?ShopifyMediaMediaWarningsArgumentsObject $argsObject = null): ShopifyMediaWarningQueryObject
    {
        $object = new ShopifyMediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyMediaPreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
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

    public function onExternalVideo(): ShopifyExternalVideoQueryObject
    {
        $object = new ShopifyExternalVideoQueryObject();
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
