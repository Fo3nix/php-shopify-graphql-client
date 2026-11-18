<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `abandonmentEmailStateUpdate` mutation.
 */
class ShopifyAbandonmentEmailStateUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonmentEmailStateUpdatePayload";

    /**
     * The updated abandonment.
     */
    public function selectAbandonment(?ShopifyAbandonmentEmailStateUpdatePayloadAbandonmentArgumentsObject $argsObject = null): ShopifyAbandonmentQueryObject
    {
        $object = new ShopifyAbandonmentQueryObject("abandonment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAbandonmentEmailStateUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyAbandonmentEmailStateUpdateUserErrorQueryObject
    {
        $object = new ShopifyAbandonmentEmailStateUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
