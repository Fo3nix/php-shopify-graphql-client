<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A file attachment associated to a comment event.
 */
class ShopifyCommentEventAttachmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentEventAttachment";

    /**
     * The file extension of the comment event attachment, indicating the file format.
     */
    public function selectFileExtension(): static
    {
        $this->selectField("fileExtension");

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
     * The image attached to the comment event.
     */
    public function selectImage(?ShopifyCommentEventAttachmentImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The filename of the comment event attachment.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The size of the attachment.
     */
    public function selectSize(): static
    {
        $this->selectField("size");

        return $this;
    }

    /**
     * The URL of the attachment.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
