<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderAttributionDefinitionDelete` mutation.
 */
class ShopifyOrderAttributionDefinitionDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinitionDeletePayload";

    /**
     * The ID of the deleted order attribution definition.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderAttributionDefinitionDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderAttributionDefinitionDeleteUserErrorQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
