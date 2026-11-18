<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPointOfSaleDevicePaymentSession;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCashDrawer;

/**
 * Represents a mobile device that Shopify Point of Sale has been installed on.
 */
class ShopifyPointOfSaleDevice implements ShopifyNode
{
    protected $activePaymentSession;
    protected $cashDrawer;
    protected $id;

    
    /**
     * The currently open payment session for this device. Data is returned only if the device's location has a POS Pro subscription.
     *
     * @return ShopifyPointOfSaleDevicePaymentSession
     */
    public function getActivePaymentSession(): ?ShopifyPointOfSaleDevicePaymentSession
    {
        return $this->activePaymentSession;
    }

    
    /**
     * The cash drawer that this device is currently assigned to. Data is returned only if the device's location has a POS Pro subscription.
     *
     * @return ShopifyCashDrawer
     */
    public function getCashDrawer(): ?ShopifyCashDrawer
    {
        return $this->cashDrawer;
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}
