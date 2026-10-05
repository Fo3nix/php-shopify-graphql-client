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
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourney
     */
    public function getBuyerJourney()
    {
        return $this->buyerJourney;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCartLink
     */
    public function getCartLink()
    {
        return $this->cartLink;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingContent
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckout
     */
    public function getExpressCheckout()
    {
        return $this->expressCheckout;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutFooter
     */
    public function getFooter()
    {
        return $this->footer;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckoutHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMain
     */
    public function getMain()
    {
        return $this->main;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingOrderSummary
     */
    public function getOrderSummary()
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
