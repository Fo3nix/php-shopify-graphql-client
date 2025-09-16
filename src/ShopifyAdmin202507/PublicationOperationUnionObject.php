<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class PublicationOperationUnionObject extends UnionObject
{
    public function onAddAllProductsOperation()
    {
        $object = new AddAllProductsOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCatalogCsvOperation()
    {
        $object = new CatalogCsvOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPublicationResourceOperation()
    {
        $object = new PublicationResourceOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
