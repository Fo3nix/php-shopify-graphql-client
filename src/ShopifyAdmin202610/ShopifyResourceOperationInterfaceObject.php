<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents a merchandising background operation interface.
 */
class ShopifyResourceOperationInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "ResourceOperation";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The count of processed rows, summing imported, failed, and skipped rows.
     */
    public function selectProcessedRowCount(): static
    {
        $this->selectField("processedRowCount");

        return $this;
    }

    /**
     * Represents a rows objects within this background operation.
     */
    public function selectRowCount(?ShopifyResourceOperationRowCountArgumentsObject $argsObject = null): ShopifyRowCountQueryObject
    {
        $object = new ShopifyRowCountQueryObject("rowCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The status of this operation.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    public function onAddAllProductsOperation(): ShopifyAddAllProductsOperationQueryObject
    {
        $object = new ShopifyAddAllProductsOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCatalogCsvOperation(): ShopifyCatalogCsvOperationQueryObject
    {
        $object = new ShopifyCatalogCsvOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPublicationResourceOperation(): ShopifyPublicationResourceOperationQueryObject
    {
        $object = new ShopifyPublicationResourceOperationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
