<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `publicationCreate` mutation.
 */
class ShopifyPublicationCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PublicationCreatePayload";

    /**
     * The publication that's been created.
     */
    public function selectPublication(?ShopifyPublicationCreatePayloadPublicationArgumentsObject $argsObject = null): ShopifyPublicationQueryObject
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
    public function selectUserErrors(?ShopifyPublicationCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPublicationUserErrorQueryObject
    {
        $object = new ShopifyPublicationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
