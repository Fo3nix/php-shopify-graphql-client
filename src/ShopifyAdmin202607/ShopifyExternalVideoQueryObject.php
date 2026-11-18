<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a video hosted outside of Shopify.
 */
class ShopifyExternalVideoQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExternalVideo";

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
     * The embed URL of the video for the respective host.
     */
    public function selectEmbedUrl(): static
    {
        $this->selectField("embedUrl");

        return $this;
    }

    /**
     * The URL.
     *
     * @deprecated Use `originUrl` instead.
     */
    public function selectEmbeddedUrl(): static
    {
        $this->selectField("embeddedUrl");

        return $this;
    }

    /**
     * Any errors that have occurred on the file.
     */
    public function selectFileErrors(?ShopifyExternalVideoFileErrorsArgumentsObject $argsObject = null): ShopifyFileErrorQueryObject
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
     * The host of the external video.
     */
    public function selectHost(): static
    {
        $this->selectField("host");

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
    public function selectMediaErrors(?ShopifyExternalVideoMediaErrorsArgumentsObject $argsObject = null): ShopifyMediaErrorQueryObject
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
    public function selectMediaWarnings(?ShopifyExternalVideoMediaWarningsArgumentsObject $argsObject = null): ShopifyMediaWarningQueryObject
    {
        $object = new ShopifyMediaWarningQueryObject("mediaWarnings");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The origin URL of the video on the respective host.
     */
    public function selectOriginUrl(): static
    {
        $this->selectField("originUrl");

        return $this;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyExternalVideoPreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
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

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the file was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
