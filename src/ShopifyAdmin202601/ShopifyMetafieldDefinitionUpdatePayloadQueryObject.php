<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `metafieldDefinitionUpdate` mutation.
 */
class ShopifyMetafieldDefinitionUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionUpdatePayload";

    /**
     * The metafield definition that was updated.
     */
    public function selectUpdatedDefinition(?ShopifyMetafieldDefinitionUpdatePayloadUpdatedDefinitionArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionQueryObject("updatedDefinition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMetafieldDefinitionUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionUpdateUserErrorQueryObject
    {
        $object = new ShopifyMetafieldDefinitionUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The asynchronous job updating the metafield definition's validation_status.
     */
    public function selectValidationJob(?ShopifyMetafieldDefinitionUpdatePayloadValidationJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("validationJob");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
