<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `appUsageRecordCreate` mutation.
 */
class ShopifyAppUsageRecordCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecordCreatePayload";

    /**
     * The newly created app usage record.
     */
    public function selectAppUsageRecord(?ShopifyAppUsageRecordCreatePayloadAppUsageRecordArgumentsObject $argsObject = null): ShopifyAppUsageRecordQueryObject
    {
        $object = new ShopifyAppUsageRecordQueryObject("appUsageRecord");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyAppUsageRecordCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
