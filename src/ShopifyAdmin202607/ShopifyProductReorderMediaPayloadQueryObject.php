<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productReorderMedia` mutation.
 */
class ShopifyProductReorderMediaPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductReorderMediaPayload";

    /**
     * The asynchronous job which reorders the media.
     */
    public function selectJob(?ShopifyProductReorderMediaPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectMediaUserErrors(?ShopifyProductReorderMediaPayloadMediaUserErrorsArgumentsObject $argsObject = null): ShopifyMediaUserErrorQueryObject
    {
        $object = new ShopifyMediaUserErrorQueryObject("mediaUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @deprecated Use `mediaUserErrors` instead.
     */
    public function selectUserErrors(?ShopifyProductReorderMediaPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
