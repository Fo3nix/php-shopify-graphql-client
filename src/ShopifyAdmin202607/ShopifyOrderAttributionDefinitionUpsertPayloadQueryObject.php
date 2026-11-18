<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderAttributionDefinitionUpsert` mutation.
 */
class ShopifyOrderAttributionDefinitionUpsertPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinitionUpsertPayload";

    /**
     * The order attribution definition that was upserted.
     */
    public function selectOrderAttributionDefinition(?ShopifyOrderAttributionDefinitionUpsertPayloadOrderAttributionDefinitionArgumentsObject $argsObject = null): ShopifyOrderAttributionDefinitionQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionQueryObject("orderAttributionDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderAttributionDefinitionUpsertPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderAttributionDefinitionUpsertUserErrorQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionUpsertUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
