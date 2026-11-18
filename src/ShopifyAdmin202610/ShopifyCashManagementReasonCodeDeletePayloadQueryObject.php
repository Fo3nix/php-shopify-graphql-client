<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cashManagementReasonCodeDelete` mutation.
 */
class ShopifyCashManagementReasonCodeDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementReasonCodeDeletePayload";

    /**
     * The deleted cash management reason code gid.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCashManagementReasonCodeDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCashManagementReasonCodeDeleteUserErrorQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
