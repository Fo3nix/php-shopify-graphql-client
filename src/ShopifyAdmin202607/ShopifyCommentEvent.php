<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCommentEventAttachment;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCommentEventEmbedHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCommentEventSubjectHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCommentEventSubject;

/**
 * A comment that staff members add to the timeline of [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder), [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer), [`InventoryTransfer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransfer), [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company), [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation), or [`PriceRule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceRule) objects. Staff use comments to document internal notes, communicate with team members, and track important information about these types.
 *
 * The comment includes information like the [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) who authored it, when it was created, and whether it's editable or deletable. Comments can have file attachments and reference related objects like [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) or [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects through embeds.
 */
class ShopifyCommentEvent implements ShopifyEvent, ShopifyNode
{
    protected $action;
    protected $appTitle;
    protected $attachments;
    protected $attributeToApp;
    protected $attributeToUser;
    protected $author;
    protected $canDelete;
    protected $canEdit;
    protected $createdAt;
    protected $criticalAlert;
    protected $edited;
    protected $embed;
    protected $id;
    protected $message;
    protected $rawMessage;
    protected $subject;

    
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
     * The name of the app that created the event.
     *
     * @return string
     */
    public function getAppTitle(): ?string
    {
        return $this->appTitle;
    }

    
    /**
     * The attachments associated with the comment event.
     *
     * @return ShopifyCommentEventAttachment[]
     */
    public function getAttachments(): ?array
    {
        return $this->attachments;
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
     * The name of the user that authored the comment event.
     *
     * @return ShopifyStaffMember
     */
    public function getAuthor(): ?ShopifyStaffMember
    {
        return $this->author;
    }

    
    /**
     * Whether the comment event can be deleted. If true, then the comment event can be deleted.
     *
     * @return bool
     */
    public function getCanDelete(): ?bool
    {
        return $this->canDelete;
    }

    
    /**
     * Whether the comment event can be edited. If true, then the comment event can be edited.
     *
     * @return bool
     */
    public function getCanEdit(): ?bool
    {
        return $this->canEdit;
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
     * Whether the comment event has been edited. If true, then the comment event has been edited.
     *
     * @return bool
     */
    public function getEdited(): ?bool
    {
        return $this->edited;
    }

    
    /**
     * The object reference associated with the comment event. For example, a product or discount).
     *
     * @return ShopifyCustomer|ShopifyDraftOrder|ShopifyInventoryTransfer|ShopifyOrder|ShopifyProduct|ShopifyProductVariant
     */
    public function getEmbed(): ShopifyCustomer|ShopifyDraftOrder|ShopifyInventoryTransfer|ShopifyOrder|ShopifyProduct|ShopifyProductVariant|null
    {
        return $this->embed;
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
     * The raw body of the comment event.
     *
     * @return string
     */
    public function getRawMessage(): ?string
    {
        return $this->rawMessage;
    }

    
    /**
     * The parent subject to which the comment event belongs.
     *
     * @return ShopifyCommentEventSubject
     */
    public function getSubject(): ?ShopifyCommentEventSubject
    {
        return $this->subject;
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
            if (isset($data['appTitle']) && $data['appTitle'] !== null) {
                $instance->appTitle = $data['appTitle'];
            }
            if (isset($data['attachments']) && $data['attachments'] !== null) {
                $instance->attachments = array_map(function($item) { return ShopifyCommentEventAttachment::fromArray($item); }, $data['attachments']);
            }
            if (isset($data['attributeToApp']) && $data['attributeToApp'] !== null) {
                $instance->attributeToApp = $data['attributeToApp'];
            }
            if (isset($data['attributeToUser']) && $data['attributeToUser'] !== null) {
                $instance->attributeToUser = $data['attributeToUser'];
            }
            if (isset($data['author']) && $data['author'] !== null) {
                $instance->author = ShopifyStaffMember::fromArray($data['author']);
            }
            if (isset($data['canDelete']) && $data['canDelete'] !== null) {
                $instance->canDelete = $data['canDelete'];
            }
            if (isset($data['canEdit']) && $data['canEdit'] !== null) {
                $instance->canEdit = $data['canEdit'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['criticalAlert']) && $data['criticalAlert'] !== null) {
                $instance->criticalAlert = $data['criticalAlert'];
            }
            if (isset($data['edited']) && $data['edited'] !== null) {
                $instance->edited = $data['edited'];
            }
            if (isset($data['embed']) && $data['embed'] !== null) {
                $instance->embed = ShopifyCommentEventEmbedHydrator::fromArray($data['embed']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['rawMessage']) && $data['rawMessage'] !== null) {
                $instance->rawMessage = $data['rawMessage'];
            }
            if (isset($data['subject']) && $data['subject'] !== null) {
                $instance->subject = ShopifyCommentEventSubjectHydrator::fromArray($data['subject']);
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
            if ($this->appTitle !== null) {
                $data['appTitle'] = $this->appTitle;
            }
            if ($this->attachments !== null) {
                $data['attachments'] = array_map(function($item) { return $item->asArray(); }, $this->attachments);
            }
            if ($this->attributeToApp !== null) {
                $data['attributeToApp'] = $this->attributeToApp;
            }
            if ($this->attributeToUser !== null) {
                $data['attributeToUser'] = $this->attributeToUser;
            }
            if ($this->author !== null) {
                $data['author'] = $this->author->asArray();
            }
            if ($this->canDelete !== null) {
                $data['canDelete'] = $this->canDelete;
            }
            if ($this->canEdit !== null) {
                $data['canEdit'] = $this->canEdit;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->criticalAlert !== null) {
                $data['criticalAlert'] = $this->criticalAlert;
            }
            if ($this->edited !== null) {
                $data['edited'] = $this->edited;
            }
            if ($this->embed !== null) {
                $data['embed'] = ShopifyCommentEventEmbedHydrator::toArray($this->embed);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->rawMessage !== null) {
                $data['rawMessage'] = $this->rawMessage;
            }
            if ($this->subject !== null) {
                $data['subject'] = ShopifyCommentEventSubjectHydrator::toArray($this->subject);
            }
            return $data;
        }
}
