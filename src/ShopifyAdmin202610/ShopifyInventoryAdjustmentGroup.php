<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryChange;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyStaffMember;

/**
 * Records a batch of inventory changes made together in a single operation. Tracks which [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) or [`StaffMember`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) initiated the changes, when they occurred, and why they were made.
 *
 * Provides an audit trail through its reason and reference document URI. The reference document URI links to the source that triggered the adjustment, such as an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), [`InventoryTransfer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransfer), or external system event. Use the [`changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryAdjustmentGroup#field-InventoryAdjustmentGroup.fields.changes) field to retrieve the specific quantity adjustments for each inventory state at affected [locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location).
 */
class ShopifyInventoryAdjustmentGroup implements ShopifyNode
{
    protected $app;
    protected $changes;
    protected $createdAt;
    protected $id;
    protected $reason;
    protected $referenceDocumentUri;
    protected $staffMember;

    
    /**
     * The app that triggered the inventory event, if one exists.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The set of inventory quantity changes that occurred in the inventory event.
     *
     * @return ShopifyInventoryChange[]
     */
    public function getChanges(): ?array
    {
        return $this->changes;
    }

    
    /**
     * The date and time the inventory adjustment group was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
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
     * The reason for the group of adjustments.
     *
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    
    /**
     * A freeform URI that represents why the inventory change happened. This can be the entity adjusting inventory
     * quantities or the Shopify resource that's associated with the inventory adjustment. For example, a unit in a
     * draft order might have been previously committed, and a merchant later creates an order from the draft order.
     * In this case, the `referenceDocumentUri` for the inventory adjustment is a URI referencing the order ID.
     *
     * @return string
     */
    public function getReferenceDocumentUri(): ?string
    {
        return $this->referenceDocumentUri;
    }

    
    /**
     * The staff member associated with the inventory event.
     *
     * @return ShopifyStaffMember
     */
    public function getStaffMember(): ?ShopifyStaffMember
    {
        return $this->staffMember;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['changes']) && $data['changes'] !== null) {
                $instance->changes = array_map(function($item) { return ShopifyInventoryChange::fromArray($item); }, $data['changes']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
            }
            if (isset($data['referenceDocumentUri']) && $data['referenceDocumentUri'] !== null) {
                $instance->referenceDocumentUri = $data['referenceDocumentUri'];
            }
            if (isset($data['staffMember']) && $data['staffMember'] !== null) {
                $instance->staffMember = ShopifyStaffMember::fromArray($data['staffMember']);
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->changes !== null) {
                $data['changes'] = array_map(function($item) { return $item->asArray(); }, $this->changes);
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            if ($this->referenceDocumentUri !== null) {
                $data['referenceDocumentUri'] = $this->referenceDocumentUri;
            }
            if ($this->staffMember !== null) {
                $data['staffMember'] = $this->staffMember->asArray();
            }
            return $data;
        }
}
