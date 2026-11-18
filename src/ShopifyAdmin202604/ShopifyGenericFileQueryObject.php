<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents any file other than HTML.
 */
class ShopifyGenericFileQueryObject extends QueryObject
{
    const OBJECT_NAME = "GenericFile";

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
    public function selectFileErrors(?ShopifyGenericFileFileErrorsArgumentsObject $argsObject = null): ShopifyFileErrorQueryObject
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
     * The generic file's MIME type.
     */
    public function selectMimeType(): static
    {
        $this->selectField("mimeType");

        return $this;
    }

    /**
     * The generic file's size in bytes.
     */
    public function selectOriginalFileSize(): static
    {
        $this->selectField("originalFileSize");

        return $this;
    }

    /**
     * The preview image for the media.
     */
    public function selectPreview(?ShopifyGenericFilePreviewArgumentsObject $argsObject = null): ShopifyMediaPreviewImageQueryObject
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

    /**
     * The generic file's URL.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
