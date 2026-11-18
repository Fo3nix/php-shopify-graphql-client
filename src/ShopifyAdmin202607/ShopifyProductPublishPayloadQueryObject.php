<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productPublish` mutation.
 */
class ShopifyProductPublishPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPublishPayload";

    /**
     * The product that has been published.
     */
    public function selectProduct(?ShopifyProductPublishPayloadProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The channels where the product is published.
     *
     * @deprecated Use Product.publications instead.
     */
    public function selectProductPublications(?ShopifyProductPublishPayloadProductPublicationsArgumentsObject $argsObject = null): ShopifyProductPublicationQueryObject
    {
        $object = new ShopifyProductPublicationQueryObject("productPublications");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The user's shop.
     */
    public function selectShop(?ShopifyProductPublishPayloadShopArgumentsObject $argsObject = null): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject("shop");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductPublishPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
