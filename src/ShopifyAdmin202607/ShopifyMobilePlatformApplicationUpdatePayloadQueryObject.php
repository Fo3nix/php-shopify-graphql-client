<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `mobilePlatformApplicationUpdate` mutation.
 */
class ShopifyMobilePlatformApplicationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationUpdatePayload";

    /**
     * Created mobile platform application.
     */
    public function selectMobilePlatformApplication(?ShopifyMobilePlatformApplicationUpdatePayloadMobilePlatformApplicationArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationUnionObject
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
    public function selectUserErrors(?ShopifyMobilePlatformApplicationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationUserErrorQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
