<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Basic events chronicle resource activities such as the creation of an article, the fulfillment of an order, or
 * the addition of a product.
 *
 * ### General events
 *
 * | Action | Description  |
 * |---|---|
 * | `create` | The item was created. |
 * | `destroy` | The item was destroyed. |
 * | `published` | The item was published. |
 * | `unpublished` | The item was unpublished. |
 * | `update` | The item was updated.  |
 *
 * ### Order events
 *
 * Order events can be divided into the following categories:
 *
 * - *Authorization*: Includes whether the authorization succeeded, failed, or is pending.
 * - *Capture*: Includes whether the capture succeeded, failed, or is pending.
 * - *Email*: Includes confirmation or cancellation of the order, as well as shipping.
 * - *Fulfillment*: Includes whether the fulfillment succeeded, failed, or is pending. Also includes cancellation, restocking, and fulfillment updates.
 * - *Order*: Includes the placement, confirmation, closing, re-opening, and cancellation of the order.
 * - *Refund*: Includes whether the refund succeeded, failed, or is pending.
 * - *Sale*: Includes whether the sale succeeded, failed, or is pending.
 * - *Void*: Includes whether the void succeeded, failed, or is pending.
 *
 * | Action  | Message  | Description  |
 * |---|---|---|
 * | `authorization_failure` | The customer, unsuccessfully, tried to authorize: `{money_amount}`. | Authorization failed. The funds cannot be captured. |
 * | `authorization_pending` | Authorization for `{money_amount}` is pending. | Authorization pending. |
 * | `authorization_success` | The customer successfully authorized us to capture: `{money_amount}`. | Authorization was successful and the funds are available for capture. |
 * | `cancelled` | Order was cancelled by `{shop_staff_name}`. | The order was cancelled. |
 * | `capture_failure` | We failed to capture: `{money_amount}`. | The capture failed. The funds cannot be transferred to the shop. |
 * | `capture_pending` | Capture for `{money_amount}` is pending. | The capture is in process. The funds are not yet available to the shop. |
 * | `capture_success` | We successfully captured: `{money_amount}` | The capture was successful and the funds are now available to the shop. |
 * | `closed` | Order was closed. | The order was closed. |
 * | `confirmed` | Received a new order: `{order_number}` by `{customer_name}`. | The order was confirmed. |
 * | `fulfillment_cancelled` | We cancelled `{number_of_line_items}` from being fulfilled by the third party fulfillment service. | Fulfillment for one or more of the line_items failed. |
 * | `fulfillment_pending` | We submitted `{number_of_line_items}` to the third party service. | One or more of the line_items has been assigned to a third party service for fulfillment. |
 * | `fulfillment_success` | We successfully fulfilled line_items. | Fulfillment was successful for one or more line_items. |
 * | `mail_sent` | `{message_type}` email was sent to the customer. | An email was sent to the customer. |
 * | `placed` | Order was placed. | An order was placed by the customer. |
 * | `re_opened` | Order was re-opened. | An order was re-opened. |
 * | `refund_failure` | We failed to refund `{money_amount}`. | The refund failed. The funds are still with the shop. |
 * | `refund_pending` | Refund of `{money_amount}` is still pending. | The refund is in process. The funds are still with shop. |
 * | `refund_success` | We successfully refunded `{money_amount}`. | The refund was successful. The funds have been transferred to the customer. |
 * | `restock_line_items` | We restocked `{number_of_line_items}`. |	One or more of the order's line items have been restocked. |
 * | `sale_failure` | The customer failed to pay `{money_amount}`. | The sale failed. The funds are not available to the shop. |
 * | `sale_pending` | The `{money_amount}` is pending. | The sale is in process. The funds are not yet available to the shop. |
 * | `sale_success` | We successfully captured `{money_amount}`. | The sale was successful. The funds are now with the shop. |
 * | `update` | `{order_number}` was updated. | The order was updated. |
 * | `void_failure` | We failed to void the authorization. | Voiding the authorization failed. The authorization is still valid. |
 * | `void_pending` | Authorization void is pending. | Voiding the authorization is in process. The authorization is still valid. |
 * | `void_success` | We successfully voided the authorization. | Voiding the authorization was successful. The authorization is no longer valid. |
 */
class ShopifyBasicEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "BasicEvent";

    /**
     * The action that occurred.
     */
    public function selectAction(): static
    {
        $this->selectField("action");

        return $this;
    }

    /**
     * Provides additional content for collapsible timeline events.
     */
    public function selectAdditionalContent(): static
    {
        $this->selectField("additionalContent");

        return $this;
    }

    /**
     * Provides additional data for event consumers.
     */
    public function selectAdditionalData(): static
    {
        $this->selectField("additionalData");

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
     * Refers to a certain event and its resources.
     */
    public function selectArguments(): static
    {
        $this->selectField("arguments");

        return $this;
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
     * The entity which performed the action that generated the event.
     */
    public function selectAuthor(): static
    {
        $this->selectField("author");

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
     * Whether this event has additional content.
     */
    public function selectHasAdditionalContent(): static
    {
        $this->selectField("hasAdditionalContent");

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
     * Human readable text that describes the event.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * Human readable text that supports the event message.
     */
    public function selectSecondaryMessage(): static
    {
        $this->selectField("secondaryMessage");

        return $this;
    }

    /**
     * The resource that generated the event. To see a list of possible types,
     * refer to [HasEvents](https://shopify.dev/docs/api/admin-graphql/unstable/interfaces/HasEvents#implemented-in).
     */
    public function selectSubject(?ShopifyBasicEventSubjectArgumentsObject $argsObject = null): ShopifyHasEventsInterfaceObject
    {
        $object = new ShopifyHasEventsInterfaceObject("subject");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the resource that generated the event.
     */
    public function selectSubjectId(): static
    {
        $this->selectField("subjectId");

        return $this;
    }

    /**
     * The type of the resource that generated the event.
     */
    public function selectSubjectType(): static
    {
        $this->selectField("subjectType");

        return $this;
    }
}
