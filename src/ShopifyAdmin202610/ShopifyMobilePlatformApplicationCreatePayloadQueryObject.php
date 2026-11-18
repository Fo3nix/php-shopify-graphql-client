<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `mobilePlatformApplicationCreate` mutation.
 */
class ShopifyMobilePlatformApplicationCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationCreatePayload";

    /**
     * Created mobile platform application.
     */
    public function selectMobilePlatformApplication(?ShopifyMobilePlatformApplicationCreatePayloadMobilePlatformApplicationArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationUnionObject
    {
        $object = new ShopifyMobilePlatformApplicationUnionObject("mobilePlatformApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMobilePlatformApplicationCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationUserErrorQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
