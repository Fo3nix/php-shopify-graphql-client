<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `combinedListingUpdate` mutation.
 */
class ShopifyCombinedListingUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingUpdatePayload";

    /**
     * The parent product.
     */
    public function selectProduct(?ShopifyCombinedListingUpdatePayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCombinedListingUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCombinedListingUpdateUserErrorQueryObject
    {
        $object = new ShopifyCombinedListingUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
