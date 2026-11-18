<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Shopify hosted video.
 */
class ShopifyVideoQueryObject extends QueryObject
{
    const OBJECT_NAME = "Video";

    /**
     * A word or phrase to share the nature or contents of a media.
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
     * The video's duration in milliseconds. This value is `null` unless the video's status field is
     * [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready).
     */
    public function selectDuration(): static
    {
        $this->selectField("duration");

        return $this;
    }

    /**
     * Any errors that have occurred on the file.
     */
    public function selectFileErrors(?ShopifyVideoFileErrorsArgumentsObject $argsObject = null): ShopifyFileErrorQueryObject
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
     * The video's filename.
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
    public function selectMediaErrors(?ShopifyVideoMediaErrorsArgumentsObject $argsObject = null): ShopifyMediaErrorQueryObject
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
    public function selectMediaWarnings(?ShopifyVideoMediaWarningsArgumentsObject $argsObject = null): ShopifyMediaWarningQueryObject
    {
        $object = new ShopifyMediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The video's original source. This value is `null` unless the video's status field is
     * [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready).
     */
    public function selectOriginalSource(?ShopifyVideoOriginalSourceArgumentsObject $argsObject = null): ShopifyVideoSourceQueryObject
    {
        $object = new ShopifyVideoSourceQueryObject("originalSource");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyVideoPreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
    {
        $object = new ShopifyMediaPreviewImageQueryObject("preview");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The video's sources. This value is empty unless the video's status field is
     * [READY](https://shopify.dev/api/admin-graphql/latest/enums/MediaStatus#value-ready).
     */
    public function selectSources(?ShopifyVideoSourcesArgumentsObject $argsObject = null): ShopifyVideoSourceQueryObject
    {
        $object = new ShopifyVideoSourceQueryObject("sources");
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
