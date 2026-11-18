<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `shopPolicyUpdate` mutation.
 */
class ShopifyShopPolicyUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPolicyUpdatePayload";

    /**
     * The shop policy that has been updated.
     */
    public function selectShopPolicy(?ShopifyShopPolicyUpdatePayloadShopPolicyArgumentsObject $argsObject = null): ShopifyShopPolicyQueryObject
    {
        $object = new ShopifyShopPolicyQueryObject("shopPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyShopPolicyUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyShopPolicyUserErrorQueryObject
    {
        $object = new ShopifyShopPolicyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
