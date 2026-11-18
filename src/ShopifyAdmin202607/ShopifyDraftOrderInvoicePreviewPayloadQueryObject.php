<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderInvoicePreview` mutation.
 */
class ShopifyDraftOrderInvoicePreviewPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderInvoicePreviewPayload";

    /**
     * The draft order invoice email rendered as HTML to allow previewing.
     */
    public function selectPreviewHtml(): static
    {
        $this->selectField("previewHtml");

        return $this;
    }

    /**
     * The subject preview for the draft order invoice email.
     */
    public function selectPreviewSubject(): static
    {
        $this->selectField("previewSubject");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDraftOrderInvoicePreviewPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
