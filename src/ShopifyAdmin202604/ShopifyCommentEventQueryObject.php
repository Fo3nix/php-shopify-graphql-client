<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A comment that staff members add to the timeline of [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder), [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer), [`InventoryTransfer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransfer), [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company), [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation), or [`PriceRule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceRule) objects. Staff use comments to document internal notes, communicate with team members, and track important information about these types.
 *
 * The comment includes information like the [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) who authored it, when it was created, and whether it's editable or deletable. Comments can have file attachments and reference related objects like [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) or [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects through embeds.
 */
class ShopifyCommentEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentEvent";

    /**
     * The action that occurred.
     */
    public function selectAction(): static
    {
        $this->selectField("action");

        return $this;
    }

    /**
     * The name of the app that created the event.
     */
    public function selectAppTitle(): static
    {
        $this->selectField("appTitle");

        return $this;
    }

    /**
     * The attachments associated with the comment event.
     */
    public function selectAttachments(?ShopifyCommentEventAttachmentsArgumentsObject $argsObject = null): ShopifyCommentEventAttachmentQueryObject
    {
        $object = new ShopifyCommentEventAttachmentQueryObject("attachments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the event was created by an app.
     */
    public function selectAttributeToApp(): static
    {
        $this->selectField("attributeToApp");

        return $this;
    }

    /**
     * Whether the event was caused by an admin user.
     */
    public function selectAttributeToUser(): static
    {
        $this->selectField("attributeToUser");

        return $this;
    }

    /**
     * The name of the user that authored the comment event.
     */
    public function selectAuthor(?ShopifyCommentEventAuthorArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("author");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the comment event can be deleted. If true, then the comment event can be deleted.
     */
    public function selectCanDelete(): static
    {
        $this->selectField("canDelete");

        return $this;
    }

    /**
     * Whether the comment event can be edited. If true, then the comment event can be edited.
     */
    public function selectCanEdit(): static
    {
        $this->selectField("canEdit");

        return $this;
    }

    /**
     * The date and time when the event was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Whether the event is critical.
     */
    public function selectCriticalAlert(): static
    {
        $this->selectField("criticalAlert");

        return $this;
    }

    /**
     * Whether the comment event has been edited. If true, then the comment event has been edited.
     */
    public function selectEdited(): static
    {
        $this->selectField("edited");

        return $this;
    }

    /**
     * The object reference associated with the comment event. For example, a product or discount).
     */
    public function selectEmbed(?ShopifyCommentEventEmbedArgumentsObject $argsObject = null): ShopifyCommentEventEmbedUnionObject
    {
        $object = new ShopifyCommentEventEmbedUnionObject("embed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * Human readable text that describes the event.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * The raw body of the comment event.
     */
    public function selectRawMessage(): static
    {
        $this->selectField("rawMessage");

        return $this;
    }

    /**
     * The parent subject to which the comment event belongs.
     */
    public function selectSubject(?ShopifyCommentEventSubjectArgumentsObject $argsObject = null): ShopifyCommentEventSubjectInterfaceObject
    {
        $object = new ShopifyCommentEventSubjectInterfaceObject("subject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
