<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;

class FulfillmentHold
{
    protected $displayReason;
    protected $handle;
    protected $heldByApp;
    protected $heldByRequestingApp;
    protected $id;
    protected $reason;
    protected $reasonNotes;

    
    /**
     * @return string
     */
    public function getDisplayReason()
    {
        return $this->displayReason;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return App
     */
    public function getHeldByApp()
    {
        return $this->heldByApp;
    }

    
    /**
     * @return bool
     */
    public function getHeldByRequestingApp()
    {
        return $this->heldByRequestingApp;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return FulfillmentHoldReasonEnumObject
     */
    public function getReason()
    {
        return $this->reason;
    }

    
    /**
     * @return string
     */
    public function getReasonNotes()
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
                $instance->heldByApp = App::fromArray($data['heldByApp']);
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
