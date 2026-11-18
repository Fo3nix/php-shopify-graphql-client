<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldDefinitionCreate` mutation.
 */
class ShopifyMetafieldDefinitionCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionCreatePayload";

    /**
     * The metafield definition that was created.
     */
    public function selectCreatedDefinition(?ShopifyMetafieldDefinitionCreatePayloadCreatedDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("createdDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldDefinitionCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionCreateUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
