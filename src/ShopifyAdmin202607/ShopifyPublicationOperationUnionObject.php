<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\UnionObject;

/**
 * The possible types of publication operations.
 */
class ShopifyPublicationOperationUnionObject extends UnionObject
{
    public function onShopifyAddAllProductsOperation(): ShopifyAddAllProductsOperationQueryObject
    {
        $object = new ShopifyAddAllProductsOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCatalogCsvOperation(): ShopifyCatalogCsvOperationQueryObject
    {
        $object = new ShopifyCatalogCsvOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPublicationResourceOperation(): ShopifyPublicationResourceOperationQueryObject
    {
        $object = new ShopifyPublicationResourceOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
