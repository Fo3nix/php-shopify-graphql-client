<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldDefinitionDelete` mutation.
 */
class ShopifyMetafieldDefinitionDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionDeletePayload";

    /**
     * The metafield definition that was deleted.
     */
    public function selectDeletedDefinition(?ShopifyMetafieldDefinitionDeletePayloadDeletedDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionIdentifierQueryObject
    {
        $object = new ShopifyMetafieldDefinitionIdentifierQueryObject("deletedDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the deleted metafield definition.
     */
    public function selectDeletedDefinitionId(): static
    {
        $this->selectField("deletedDefinitionId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldDefinitionDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionDeleteUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
