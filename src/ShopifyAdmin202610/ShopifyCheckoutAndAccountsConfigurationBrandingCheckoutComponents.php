<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourney;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCartLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingContent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckout;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingMain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummary;

/**
 * The checkout-specific component customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutComponents
{
    protected $buyerJourney;
    protected $cartLink;
    protected $content;
    protected $expressCheckout;
    protected $footer;
    protected $header;
    protected $main;
    protected $orderSummary;

    
    /**
     * The customizations for the breadcrumbs that represent a buyer's journey to the checkout.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourney
     */
    public function getBuyerJourney(): ?ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourney
    {
        return $this->buyerJourney;
    }

    
    /**
     * The checkout cart link customizations. For example, by setting the visibility field to `HIDDEN`, you can hide the cart icon in the header for one-page checkout, and the cart link in breadcrumbs in three-page checkout.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCartLink
     */
    public function getCartLink(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCartLink
    {
        return $this->cartLink;
    }

    
    /**
     * The content container customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingContent
     */
    public function getContent(): ?ShopifyCheckoutAndAccountsConfigurationBrandingContent
    {
        return $this->content;
    }

    
    /**
     * The express checkout customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckout
     */
    public function getExpressCheckout(): ?ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckout
    {
        return $this->expressCheckout;
    }

    
    /**
     * The checkout footer customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooter
     */
    public function getFooter(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooter
    {
        return $this->footer;
    }

    
    /**
     * The checkout header customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeader
     */
    public function getHeader(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeader
    {
        return $this->header;
    }

    
    /**
     * The main checkout customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMain
     */
    public function getMain(): ?ShopifyCheckoutAndAccountsConfigurationBrandingMain
    {
        return $this->main;
    }

    
    /**
     * The order summary customizations.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummary
     */
    public function getOrderSummary(): ?ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummary
    {
        return $this->orderSummary;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['buyerJourney']) && $data['buyerJourney'] !== null) {
                $instance->buyerJourney = ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourney::fromArray($data['buyerJourney']);
            }
            if (isset($data['cartLink']) && $data['cartLink'] !== null) {
                $instance->cartLink = ShopifyCheckoutAndAccountsConfigurationBrandingCartLink::fromArray($data['cartLink']);
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = ShopifyCheckoutAndAccountsConfigurationBrandingContent::fromArray($data['content']);
            }
            if (isset($data['expressCheckout']) && $data['expressCheckout'] !== null) {
                $instance->expressCheckout = ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckout::fromArray($data['expressCheckout']);
            }
            if (isset($data['footer']) && $data['footer'] !== null) {
                $instance->footer = ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooter::fromArray($data['footer']);
            }
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeader::fromArray($data['header']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = ShopifyCheckoutAndAccountsConfigurationBrandingMain::fromArray($data['main']);
            }
            if (isset($data['orderSummary']) && $data['orderSummary'] !== null) {
                $instance->orderSummary = ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummary::fromArray($data['orderSummary']);
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
            if ($this->buyerJourney !== null) {
                $data['buyerJourney'] = $this->buyerJourney->asArray();
            }
            if ($this->cartLink !== null) {
                $data['cartLink'] = $this->cartLink->asArray();
            }
            if ($this->content !== null) {
                $data['content'] = $this->content->asArray();
            }
            if ($this->expressCheckout !== null) {
                $data['expressCheckout'] = $this->expressCheckout->asArray();
            }
            if ($this->footer !== null) {
                $data['footer'] = $this->footer->asArray();
            }
            if ($this->header !== null) {
                $data['header'] = $this->header->asArray();
            }
            if ($this->main !== null) {
                $data['main'] = $this->main->asArray();
            }
            if ($this->orderSummary !== null) {
                $data['orderSummary'] = $this->orderSummary->asArray();
            }
            return $data;
        }
}
