<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;

/**
 * A fulfillment hold currently applied on a fulfillment order.
 */
class ShopifyFulfillmentHold implements ShopifyNode
{
    protected $displayReason;
    protected $handle;
    protected $heldByApp;
    protected $heldByRequestingApp;
    protected $id;
    protected $reason;
    protected $reasonNotes;

    
    /**
     * The localized reason for the fulfillment hold for display purposes.
     *
     * @return string
     */
    public function getDisplayReason(): ?string
    {
        return $this->displayReason;
    }

    
    /**
     * An identifier an app can use to reference one of many holds it applied to a fulfillment order.
     * This field must be unique among the holds that a single app applies to a single fulfillment order.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * The app that created the fulfillment hold.
     *
     * @return ShopifyApp
     */
    public function getHeldByApp(): ?ShopifyApp
    {
        return $this->heldByApp;
    }

    
    /**
     * A boolean value that indicates whether the requesting app created the fulfillment hold.
     *
     * @return bool
     */
    public function getHeldByRequestingApp(): ?bool
    {
        return $this->heldByRequestingApp;
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
     * The reason for the fulfillment hold.
     *
     * @return string A ShopifyFulfillmentHoldReasonEnumObject value
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    
    /**
     * Additional information about the fulfillment hold reason.
     *
     * @return string
     */
    public function getReasonNotes(): ?string
    {
        return $this->reasonNotes;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['displayReason']) && $data['displayReason'] !== null) {
                $instance->displayReason = $data['displayReason'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['heldByApp']) && $data['heldByApp'] !== null) {
                $instance->heldByApp = ShopifyApp::fromArray($data['heldByApp']);
            }
            if (isset($data['heldByRequestingApp']) && $data['heldByRequestingApp'] !== null) {
                $instance->heldByRequestingApp = $data['heldByRequestingApp'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
            }
            if (isset($data['reasonNotes']) && $data['reasonNotes'] !== null) {
                $instance->reasonNotes = $data['reasonNotes'];
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
            if ($this->displayReason !== null) {
                $data['displayReason'] = $this->displayReason;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->heldByApp !== null) {
                $data['heldByApp'] = $this->heldByApp->asArray();
            }
            if ($this->heldByRequestingApp !== null) {
                $data['heldByRequestingApp'] = $this->heldByRequestingApp;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            if ($this->reasonNotes !== null) {
                $data['reasonNotes'] = $this->reasonNotes;
            }
            return $data;
        }
}
