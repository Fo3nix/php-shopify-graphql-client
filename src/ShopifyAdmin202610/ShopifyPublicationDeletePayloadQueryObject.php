<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publicationDelete` mutation.
 */
class ShopifyPublicationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublicationDeletePayload";

    /**
     * The ID of the publication that was deleted.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPublicationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPublicationUserErrorQueryObject
    {
        $object = new ShopifyPublicationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
