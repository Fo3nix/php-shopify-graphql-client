<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderEditCommit` mutation.
 */
class ShopifyOrderEditCommitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderEditCommitPayload";

    /**
     * The order with changes applied.
     */
    public function selectOrder(?ShopifyOrderEditCommitPayloadOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Messages to display to the user after the staged changes are committed.
     */
    public function selectSuccessMessages(): static
    {
        $this->selectField("successMessages");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderEditCommitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
