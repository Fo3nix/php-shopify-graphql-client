<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `priceListFixedPricesByProductUpdate` mutation.
 */
class ShopifyPriceListFixedPricesByProductUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListFixedPricesByProductUpdatePayload";

    /**
     * The price list for which the fixed prices were modified.
     */
    public function selectPriceList(?ShopifyPriceListFixedPricesByProductUpdatePayloadPriceListArgumentsObject $argsObject = null): ShopifyPriceListQueryObject
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product for which the fixed prices were added.
     */
    public function selectPricesToAddProducts(?ShopifyPriceListFixedPricesByProductUpdatePayloadPricesToAddProductsArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("pricesToAddProducts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product for which the fixed prices were deleted.
     */
    public function selectPricesToDeleteProducts(?ShopifyPriceListFixedPricesByProductUpdatePayloadPricesToDeleteProductsArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("pricesToDeleteProducts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPriceListFixedPricesByProductUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPriceListFixedPricesByProductBulkUpdateUserErrorQueryObject
    {
        $object = new ShopifyPriceListFixedPricesByProductBulkUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
