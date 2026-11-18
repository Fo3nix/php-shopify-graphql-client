<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The properties and status of a bulk discount redeem code creation operation.
 */
class ShopifyDiscountRedeemCodeBulkCreationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCodeBulkCreation";

    /**
     * The result of each code creation operation associated with the bulk creation operation including any errors that might have occurred during the operation.
     */
    public function selectCodes(?ShopifyDiscountRedeemCodeBulkCreationCodesArgumentsObject $argsObject = null): ShopifyDiscountRedeemCodeBulkCreationCodeConnectionQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeBulkCreationCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of codes to create.
     */
    public function selectCodesCount(): static
    {
        $this->selectField("codesCount");

        return $this;
    }

    /**
     * The date and time when the bulk creation was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The code discount associated with the created codes.
     */
    public function selectDiscountCode(?ShopifyDiscountRedeemCodeBulkCreationDiscountCodeArgumentsObject $argsObject = null): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject("discountCode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the bulk creation is still queued (`false`) or has been run (`true`).
     */
    public function selectDone(): static
    {
        $this->selectField("done");

        return $this;
    }

    /**
     * The number of codes that weren't created successfully.
     */
    public function selectFailedCount(): static
    {
        $this->selectField("failedCount");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The number of codes created successfully.
     */
    public function selectImportedCount(): static
    {
        $this->selectField("importedCount");

        return $this;
    }
}
