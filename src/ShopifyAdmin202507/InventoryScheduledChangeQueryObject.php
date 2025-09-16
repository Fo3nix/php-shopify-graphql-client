<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryScheduledChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChange";

    public function selectExpectedAt()
    {
        $this->selectField("expectedAt");

        return $this;
    }

    public function selectFromName()
    {
        $this->selectField("fromName");

        return $this;
    }

    public function selectInventoryLevel(InventoryScheduledChangeInventoryLevelArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLedgerDocumentUri()
    {
        $this->selectField("ledgerDocumentUri");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectToName()
    {
        $this->selectField("toName");

        return $this;
    }
}
