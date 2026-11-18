<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `carrierServiceDelete` mutation.
 */
class ShopifyCarrierServiceDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CarrierServiceDeletePayload";

    /**
     * The ID of the deleted carrier service.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCarrierServiceDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCarrierServiceDeleteUserErrorQueryObject
    {
        $object = new ShopifyCarrierServiceDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
