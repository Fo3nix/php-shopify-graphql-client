<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * The subject line of a comment event.
 */
class ShopifyCommentEventSubjectInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CommentEventSubject";

    /**
     * Whether the timeline subject has a timeline comment. If true, then a timeline comment exists.
     */
    public function selectHasTimelineComment(): static
    {
        $this->selectField("hasTimelineComment");

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
}
