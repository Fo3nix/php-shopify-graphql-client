<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `cashManagementReasonCodeCreate` mutation.
 */
class ShopifyCashManagementReasonCodeCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementReasonCodeCreatePayload";

    /**
     * The created cash management reason code.
     */
    public function selectReasonCode(?ShopifyCashManagementReasonCodeCreatePayloadReasonCodeArgumentsObject $argsObject = null): ShopifyCashManagementCustomReasonCodeQueryObject
    {
        $object = new ShopifyCashManagementCustomReasonCodeQueryObject("reasonCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCashManagementReasonCodeCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCashManagementReasonCodeCreateUserErrorQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
