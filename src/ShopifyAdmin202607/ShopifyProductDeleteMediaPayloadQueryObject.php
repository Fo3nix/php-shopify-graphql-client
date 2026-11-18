<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productDeleteMedia` mutation.
 */
class ShopifyProductDeleteMediaPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductDeleteMediaPayload";

    /**
     * List of media IDs which were deleted.
     */
    public function selectDeletedMediaIds(): static
    {
        $this->selectField("deletedMediaIds");

        return $this;
    }

    /**
     * List of product image IDs which were deleted.
     */
    public function selectDeletedProductImageIds(): static
    {
        $this->selectField("deletedProductImageIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectMediaUserErrors(?ShopifyProductDeleteMediaPayloadMediaUserErrorsArgumentsObject $argsObject = null): ShopifyMediaUserErrorQueryObject
    {
        $object = new ShopifyMediaUserErrorQueryObject("mediaUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product associated with the deleted media.
     */
    public function selectProduct(?ShopifyProductDeleteMediaPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
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
     *
     * @deprecated Use `mediaUserErrors` instead.
     */
    public function selectUserErrors(?ShopifyProductDeleteMediaPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
