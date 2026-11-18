<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents an object that has a list of events.
 */
class ShopifyHasEventsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasEvents";

    /**
     * The paginated list of events associated with the host subject.
     */
    public function selectEvents(?ShopifyHasEventsEventsArgumentsObject $argsObject = null): ShopifyEventConnectionQueryObject
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onArticle(): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlog(): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollection(): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onComment(): ShopifyCommentQueryObject
    {
        $object = new ShopifyCommentQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompany(): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocation(): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticBxgy(): ShopifyDiscountAutomaticBxgyQueryObject
    {
        $object = new ShopifyDiscountAutomaticBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticNode(): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeNode(): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountNode(): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrder(): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransfer(): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPage(): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
