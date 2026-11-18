<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publicationUpdate` mutation.
 */
class ShopifyPublicationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublicationUpdatePayload";

    /**
     * The publication that's been updated.
     */
    public function selectPublication(?ShopifyPublicationUpdatePayloadPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
    {
        $object = new ShopifyPublicationQueryObject("publication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPublicationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPublicationUserErrorQueryObject
    {
        $object = new ShopifyPublicationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
