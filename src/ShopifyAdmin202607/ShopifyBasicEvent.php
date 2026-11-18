<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyHasEventsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyHasEvents;

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
class ShopifyBasicEvent implements ShopifyEvent, ShopifyNode
{
    protected $action;
    protected $additionalContent;
    protected $additionalData;
    protected $appTitle;
    protected $arguments;
    protected $attributeToApp;
    protected $attributeToUser;
    protected $author;
    protected $createdAt;
    protected $criticalAlert;
    protected $hasAdditionalContent;
    protected $id;
    protected $message;
    protected $secondaryMessage;
    protected $subject;
    protected $subjectId;
    protected $subjectType;

    
    /**
     * The action that occurred.
     *
     * @return string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    
    /**
     * Provides additional content for collapsible timeline events.
     *
     * @return string
     */
    public function getAdditionalContent(): mixed
    {
        return $this->additionalContent;
    }

    
    /**
     * Provides additional data for event consumers.
     *
     * @return string
     */
    public function getAdditionalData(): mixed
    {
        return $this->additionalData;
    }

    
    /**
     * The name of the app that created the event.
     *
     * @return string
     */
    public function getAppTitle(): ?string
    {
        return $this->appTitle;
    }

    
    /**
     * Refers to a certain event and its resources.
     *
     * @return string
     */
    public function getArguments(): mixed
    {
        return $this->arguments;
    }

    
    /**
     * Whether the event was created by an app.
     *
     * @return bool
     */
    public function getAttributeToApp(): ?bool
    {
        return $this->attributeToApp;
    }

    
    /**
     * Whether the event was caused by an admin user.
     *
     * @return bool
     */
    public function getAttributeToUser(): ?bool
    {
        return $this->attributeToUser;
    }

    
    /**
     * The entity which performed the action that generated the event.
     *
     * @return string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    
    /**
     * The date and time when the event was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Whether the event is critical.
     *
     * @return bool
     */
    public function getCriticalAlert(): ?bool
    {
        return $this->criticalAlert;
    }

    
    /**
     * Whether this event has additional content.
     *
     * @return bool
     */
    public function getHasAdditionalContent(): ?bool
    {
        return $this->hasAdditionalContent;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Human readable text that describes the event.
     *
     * @return string
     */
    public function getMessage(): mixed
    {
        return $this->message;
    }

    
    /**
     * Human readable text that supports the event message.
     *
     * @return string
     */
    public function getSecondaryMessage(): mixed
    {
        return $this->secondaryMessage;
    }

    
    /**
     * The resource that generated the event. To see a list of possible types,
     * refer to [HasEvents](https://shopify.dev/docs/api/admin-graphql/unstable/interfaces/HasEvents#implemented-in).
     *
     * @return ShopifyHasEvents
     */
    public function getSubject(): ?ShopifyHasEvents
    {
        return $this->subject;
    }

    
    /**
     * The ID of the resource that generated the event.
     *
     * @return string
     */
    public function getSubjectId(): ?string
    {
        return $this->subjectId;
    }

    
    /**
     * The type of the resource that generated the event.
     *
     * @return string A ShopifyEventSubjectTypeEnumObject value
     */
    public function getSubjectType(): ?string
    {
        return $this->subjectType;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['action']) && $data['action'] !== null) {
                $instance->action = $data['action'];
            }
            if (isset($data['additionalContent']) && $data['additionalContent'] !== null) {
                $instance->additionalContent = $data['additionalContent'];
            }
            if (isset($data['additionalData']) && $data['additionalData'] !== null) {
                $instance->additionalData = $data['additionalData'];
            }
            if (isset($data['appTitle']) && $data['appTitle'] !== null) {
                $instance->appTitle = $data['appTitle'];
            }
            if (isset($data['arguments']) && $data['arguments'] !== null) {
                $instance->arguments = $data['arguments'];
            }
            if (isset($data['attributeToApp']) && $data['attributeToApp'] !== null) {
                $instance->attributeToApp = $data['attributeToApp'];
            }
            if (isset($data['attributeToUser']) && $data['attributeToUser'] !== null) {
                $instance->attributeToUser = $data['attributeToUser'];
            }
            if (isset($data['author']) && $data['author'] !== null) {
                $instance->author = $data['author'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['criticalAlert']) && $data['criticalAlert'] !== null) {
                $instance->criticalAlert = $data['criticalAlert'];
            }
            if (isset($data['hasAdditionalContent']) && $data['hasAdditionalContent'] !== null) {
                $instance->hasAdditionalContent = $data['hasAdditionalContent'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['secondaryMessage']) && $data['secondaryMessage'] !== null) {
                $instance->secondaryMessage = $data['secondaryMessage'];
            }
            if (isset($data['subject']) && $data['subject'] !== null) {
                $instance->subject = ShopifyHasEventsHydrator::fromArray($data['subject']);
            }
            if (isset($data['subjectId']) && $data['subjectId'] !== null) {
                $instance->subjectId = $data['subjectId'];
            }
            if (isset($data['subjectType']) && $data['subjectType'] !== null) {
                $instance->subjectType = $data['subjectType'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->action !== null) {
                $data['action'] = $this->action;
            }
            if ($this->additionalContent !== null) {
                $data['additionalContent'] = $this->additionalContent;
            }
            if ($this->additionalData !== null) {
                $data['additionalData'] = $this->additionalData;
            }
            if ($this->appTitle !== null) {
                $data['appTitle'] = $this->appTitle;
            }
            if ($this->arguments !== null) {
                $data['arguments'] = $this->arguments;
            }
            if ($this->attributeToApp !== null) {
                $data['attributeToApp'] = $this->attributeToApp;
            }
            if ($this->attributeToUser !== null) {
                $data['attributeToUser'] = $this->attributeToUser;
            }
            if ($this->author !== null) {
                $data['author'] = $this->author;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->criticalAlert !== null) {
                $data['criticalAlert'] = $this->criticalAlert;
            }
            if ($this->hasAdditionalContent !== null) {
                $data['hasAdditionalContent'] = $this->hasAdditionalContent;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->secondaryMessage !== null) {
                $data['secondaryMessage'] = $this->secondaryMessage;
            }
            if ($this->subject !== null) {
                $data['subject'] = ShopifyHasEventsHydrator::toArray($this->subject);
            }
            if ($this->subjectId !== null) {
                $data['subjectId'] = $this->subjectId;
            }
            if ($this->subjectType !== null) {
                $data['subjectType'] = $this->subjectType;
            }
            return $data;
        }
}
