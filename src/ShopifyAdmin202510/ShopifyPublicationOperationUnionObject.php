<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyPublicationOperationUnionObject extends UnionObject
{
    public function onShopifyAddAllProductsOperation()
    {
        $object = new ShopifyAddAllProductsOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCatalogCsvOperation()
    {
        $object = new ShopifyCatalogCsvOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPublicationResourceOperation()
    {
        $object = new ShopifyPublicationResourceOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
