<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingBuyerJourney;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingCartLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingCheckbox;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingChoiceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingContent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingControl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingDividerStyle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingExpressCheckout;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingFooter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingGlobal;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingHeadingLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingMain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingMerchandiseThumbnail;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingOrderSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingButton;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingSelect;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CheckoutBrandingTextField;

class CheckoutBrandingCustomizations
{
    protected $buyerJourney;
    protected $cartLink;
    protected $checkbox;
    protected $choiceList;
    protected $content;
    protected $control;
    protected $divider;
    protected $expressCheckout;
    protected $favicon;
    protected $footer;
    protected $global;
    protected $header;
    protected $headingLevel1;
    protected $headingLevel2;
    protected $headingLevel3;
    protected $main;
    protected $merchandiseThumbnail;
    protected $orderSummary;
    protected $primaryButton;
    protected $secondaryButton;
    protected $select;
    protected $textField;

    
    /**
     * @return CheckoutBrandingBuyerJourney
     */
    public function getBuyerJourney()
    {
        return $this->buyerJourney;
    }

    
    /**
     * @return CheckoutBrandingCartLink
     */
    public function getCartLink()
    {
        return $this->cartLink;
    }

    
    /**
     * @return CheckoutBrandingCheckbox
     */
    public function getCheckbox()
    {
        return $this->checkbox;
    }

    
    /**
     * @return CheckoutBrandingChoiceList
     */
    public function getChoiceList()
    {
        return $this->choiceList;
    }

    
    /**
     * @return CheckoutBrandingContent
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * @return CheckoutBrandingControl
     */
    public function getControl()
    {
        return $this->control;
    }

    
    /**
     * @return CheckoutBrandingDividerStyle
     */
    public function getDivider()
    {
        return $this->divider;
    }

    
    /**
     * @return CheckoutBrandingExpressCheckout
     */
    public function getExpressCheckout()
    {
        return $this->expressCheckout;
    }

    
    /**
     * @return CheckoutBrandingImage
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    
    /**
     * @return CheckoutBrandingFooter
     */
    public function getFooter()
    {
        return $this->footer;
    }

    
    /**
     * @return CheckoutBrandingGlobal
     */
    public function getGlobal()
    {
        return $this->global;
    }

    
    /**
     * @return CheckoutBrandingHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    
    /**
     * @return CheckoutBrandingHeadingLevel
     */
    public function getHeadingLevel1()
    {
        return $this->headingLevel1;
    }

    
    /**
     * @return CheckoutBrandingHeadingLevel
     */
    public function getHeadingLevel2()
    {
        return $this->headingLevel2;
    }

    
    /**
     * @return CheckoutBrandingHeadingLevel
     */
    public function getHeadingLevel3()
    {
        return $this->headingLevel3;
    }

    
    /**
     * @return CheckoutBrandingMain
     */
    public function getMain()
    {
        return $this->main;
    }

    
    /**
     * @return CheckoutBrandingMerchandiseThumbnail
     */
    public function getMerchandiseThumbnail()
    {
        return $this->merchandiseThumbnail;
    }

    
    /**
     * @return CheckoutBrandingOrderSummary
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    
    /**
     * @return CheckoutBrandingButton
     */
    public function getPrimaryButton()
    {
        return $this->primaryButton;
    }

    
    /**
     * @return CheckoutBrandingButton
     */
    public function getSecondaryButton()
    {
        return $this->secondaryButton;
    }

    
    /**
     * @return CheckoutBrandingSelect
     */
    public function getSelect()
    {
        return $this->select;
    }

    
    /**
     * @return CheckoutBrandingTextField
     */
    public function getTextField()
    {
        return $this->textField;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['buyerJourney']) && $data['buyerJourney'] !== null) {
                $instance->buyerJourney = CheckoutBrandingBuyerJourney::fromArray($data['buyerJourney']);
            }
            if (isset($data['cartLink']) && $data['cartLink'] !== null) {
                $instance->cartLink = CheckoutBrandingCartLink::fromArray($data['cartLink']);
            }
            if (isset($data['checkbox']) && $data['checkbox'] !== null) {
                $instance->checkbox = CheckoutBrandingCheckbox::fromArray($data['checkbox']);
            }
            if (isset($data['choiceList']) && $data['choiceList'] !== null) {
                $instance->choiceList = CheckoutBrandingChoiceList::fromArray($data['choiceList']);
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = CheckoutBrandingContent::fromArray($data['content']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = CheckoutBrandingControl::fromArray($data['control']);
            }
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = CheckoutBrandingDividerStyle::fromArray($data['divider']);
            }
            if (isset($data['expressCheckout']) && $data['expressCheckout'] !== null) {
                $instance->expressCheckout = CheckoutBrandingExpressCheckout::fromArray($data['expressCheckout']);
            }
            if (isset($data['favicon']) && $data['favicon'] !== null) {
                $instance->favicon = CheckoutBrandingImage::fromArray($data['favicon']);
            }
            if (isset($data['footer']) && $data['footer'] !== null) {
                $instance->footer = CheckoutBrandingFooter::fromArray($data['footer']);
            }
            if (isset($data['global']) && $data['global'] !== null) {
                $instance->global = CheckoutBrandingGlobal::fromArray($data['global']);
            }
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = CheckoutBrandingHeader::fromArray($data['header']);
            }
            if (isset($data['headingLevel1']) && $data['headingLevel1'] !== null) {
                $instance->headingLevel1 = CheckoutBrandingHeadingLevel::fromArray($data['headingLevel1']);
            }
            if (isset($data['headingLevel2']) && $data['headingLevel2'] !== null) {
                $instance->headingLevel2 = CheckoutBrandingHeadingLevel::fromArray($data['headingLevel2']);
            }
            if (isset($data['headingLevel3']) && $data['headingLevel3'] !== null) {
                $instance->headingLevel3 = CheckoutBrandingHeadingLevel::fromArray($data['headingLevel3']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = CheckoutBrandingMain::fromArray($data['main']);
            }
            if (isset($data['merchandiseThumbnail']) && $data['merchandiseThumbnail'] !== null) {
                $instance->merchandiseThumbnail = CheckoutBrandingMerchandiseThumbnail::fromArray($data['merchandiseThumbnail']);
            }
            if (isset($data['orderSummary']) && $data['orderSummary'] !== null) {
                $instance->orderSummary = CheckoutBrandingOrderSummary::fromArray($data['orderSummary']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = CheckoutBrandingButton::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = CheckoutBrandingButton::fromArray($data['secondaryButton']);
            }
            if (isset($data['select']) && $data['select'] !== null) {
                $instance->select = CheckoutBrandingSelect::fromArray($data['select']);
            }
            if (isset($data['textField']) && $data['textField'] !== null) {
                $instance->textField = CheckoutBrandingTextField::fromArray($data['textField']);
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
            if ($this->checkbox !== null) {
                $data['checkbox'] = $this->checkbox->asArray();
            }
            if ($this->choiceList !== null) {
                $data['choiceList'] = $this->choiceList->asArray();
            }
            if ($this->content !== null) {
                $data['content'] = $this->content->asArray();
            }
            if ($this->control !== null) {
                $data['control'] = $this->control->asArray();
            }
            if ($this->divider !== null) {
                $data['divider'] = $this->divider->asArray();
            }
            if ($this->expressCheckout !== null) {
                $data['expressCheckout'] = $this->expressCheckout->asArray();
            }
            if ($this->favicon !== null) {
                $data['favicon'] = $this->favicon->asArray();
            }
            if ($this->footer !== null) {
                $data['footer'] = $this->footer->asArray();
            }
            if ($this->global !== null) {
                $data['global'] = $this->global->asArray();
            }
            if ($this->header !== null) {
                $data['header'] = $this->header->asArray();
            }
            if ($this->headingLevel1 !== null) {
                $data['headingLevel1'] = $this->headingLevel1->asArray();
            }
            if ($this->headingLevel2 !== null) {
                $data['headingLevel2'] = $this->headingLevel2->asArray();
            }
            if ($this->headingLevel3 !== null) {
                $data['headingLevel3'] = $this->headingLevel3->asArray();
            }
            if ($this->main !== null) {
                $data['main'] = $this->main->asArray();
            }
            if ($this->merchandiseThumbnail !== null) {
                $data['merchandiseThumbnail'] = $this->merchandiseThumbnail->asArray();
            }
            if ($this->orderSummary !== null) {
                $data['orderSummary'] = $this->orderSummary->asArray();
            }
            if ($this->primaryButton !== null) {
                $data['primaryButton'] = $this->primaryButton->asArray();
            }
            if ($this->secondaryButton !== null) {
                $data['secondaryButton'] = $this->secondaryButton->asArray();
            }
            if ($this->select !== null) {
                $data['select'] = $this->select->asArray();
            }
            if ($this->textField !== null) {
                $data['textField'] = $this->textField->asArray();
            }
            return $data;
        }
}
