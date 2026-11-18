<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `standardMetafieldDefinitionEnable` mutation.
 */
class ShopifyStandardMetafieldDefinitionEnablePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardMetafieldDefinitionEnablePayload";

    /**
     * The metafield definition that was created.
     */
    public function selectCreatedDefinition(?ShopifyStandardMetafieldDefinitionEnablePayloadCreatedDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
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
    public function selectUserErrors(?ShopifyStandardMetafieldDefinitionEnablePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyStandardMetafieldDefinitionEnableUserErrorQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionEnableUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
