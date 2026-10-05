<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCashDrawer;

class ShopifyPointOfSaleDevice
{
    protected $activePaymentSession;
    protected $cashDrawer;
    protected $fiscalDeviceIdentifier;
    protected $id;

    
    /**
     * @return ShopifyPointOfSaleDevicePaymentSession
     */
    public function getActivePaymentSession()
    {
        return $this->activePaymentSession;
    }

    
    /**
     * @return ShopifyCashDrawer
     */
    public function getCashDrawer()
    {
        return $this->cashDrawer;
    }

    
    /**
     * @return string
     */
    public function getFiscalDeviceIdentifier()
    {
        return $this->fiscalDeviceIdentifier;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['activePaymentSession']) && $data['activePaymentSession'] !== null) {
                $instance->activePaymentSession = ShopifyPointOfSaleDevicePaymentSession::fromArray($data['activePaymentSession']);
            }
            if (isset($data['cashDrawer']) && $data['cashDrawer'] !== null) {
                $instance->cashDrawer = ShopifyCashDrawer::fromArray($data['cashDrawer']);
            }
            if (isset($data['fiscalDeviceIdentifier']) && $data['fiscalDeviceIdentifier'] !== null) {
                $instance->fiscalDeviceIdentifier = $data['fiscalDeviceIdentifier'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->activePaymentSession !== null) {
                $data['activePaymentSession'] = $this->activePaymentSession->asArray();
            }
            if ($this->cashDrawer !== null) {
                $data['cashDrawer'] = $this->cashDrawer->asArray();
            }
            if ($this->fiscalDeviceIdentifier !== null) {
                $data['fiscalDeviceIdentifier'] = $this->fiscalDeviceIdentifier;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
