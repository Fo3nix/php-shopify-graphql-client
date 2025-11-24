<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingBuyerJourney;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingCartLink;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingCheckbox;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingChoiceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingContent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingControl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingDividerStyle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingExpressCheckout;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingFooter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingGlobal;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingHeadingLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingMain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingMerchandiseThumbnail;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingOrderSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingButton;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingSelect;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyCheckoutBrandingTextField;

class ShopifyCheckoutBrandingCustomizations
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
     * @return ShopifyCheckoutBrandingBuyerJourney
     */
    public function getBuyerJourney()
    {
        return $this->buyerJourney;
    }

    
    /**
     * @return ShopifyCheckoutBrandingCartLink
     */
    public function getCartLink()
    {
        return $this->cartLink;
    }

    
    /**
     * @return ShopifyCheckoutBrandingCheckbox
     */
    public function getCheckbox()
    {
        return $this->checkbox;
    }

    
    /**
     * @return ShopifyCheckoutBrandingChoiceList
     */
    public function getChoiceList()
    {
        return $this->choiceList;
    }

    
    /**
     * @return ShopifyCheckoutBrandingContent
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * @return ShopifyCheckoutBrandingControl
     */
    public function getControl()
    {
        return $this->control;
    }

    
    /**
     * @return ShopifyCheckoutBrandingDividerStyle
     */
    public function getDivider()
    {
        return $this->divider;
    }

    
    /**
     * @return ShopifyCheckoutBrandingExpressCheckout
     */
    public function getExpressCheckout()
    {
        return $this->expressCheckout;
    }

    
    /**
     * @return ShopifyCheckoutBrandingImage
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    
    /**
     * @return ShopifyCheckoutBrandingFooter
     */
    public function getFooter()
    {
        return $this->footer;
    }

    
    /**
     * @return ShopifyCheckoutBrandingGlobal
     */
    public function getGlobal()
    {
        return $this->global;
    }

    
    /**
     * @return ShopifyCheckoutBrandingHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    
    /**
     * @return ShopifyCheckoutBrandingHeadingLevel
     */
    public function getHeadingLevel1()
    {
        return $this->headingLevel1;
    }

    
    /**
     * @return ShopifyCheckoutBrandingHeadingLevel
     */
    public function getHeadingLevel2()
    {
        return $this->headingLevel2;
    }

    
    /**
     * @return ShopifyCheckoutBrandingHeadingLevel
     */
    public function getHeadingLevel3()
    {
        return $this->headingLevel3;
    }

    
    /**
     * @return ShopifyCheckoutBrandingMain
     */
    public function getMain()
    {
        return $this->main;
    }

    
    /**
     * @return ShopifyCheckoutBrandingMerchandiseThumbnail
     */
    public function getMerchandiseThumbnail()
    {
        return $this->merchandiseThumbnail;
    }

    
    /**
     * @return ShopifyCheckoutBrandingOrderSummary
     */
    public function getOrderSummary()
    {
        return $this->orderSummary;
    }

    
    /**
     * @return ShopifyCheckoutBrandingButton
     */
    public function getPrimaryButton()
    {
        return $this->primaryButton;
    }

    
    /**
     * @return ShopifyCheckoutBrandingButton
     */
    public function getSecondaryButton()
    {
        return $this->secondaryButton;
    }

    
    /**
     * @return ShopifyCheckoutBrandingSelect
     */
    public function getSelect()
    {
        return $this->select;
    }

    
    /**
     * @return ShopifyCheckoutBrandingTextField
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
                $instance->buyerJourney = ShopifyCheckoutBrandingBuyerJourney::fromArray($data['buyerJourney']);
            }
            if (isset($data['cartLink']) && $data['cartLink'] !== null) {
                $instance->cartLink = ShopifyCheckoutBrandingCartLink::fromArray($data['cartLink']);
            }
            if (isset($data['checkbox']) && $data['checkbox'] !== null) {
                $instance->checkbox = ShopifyCheckoutBrandingCheckbox::fromArray($data['checkbox']);
            }
            if (isset($data['choiceList']) && $data['choiceList'] !== null) {
                $instance->choiceList = ShopifyCheckoutBrandingChoiceList::fromArray($data['choiceList']);
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = ShopifyCheckoutBrandingContent::fromArray($data['content']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = ShopifyCheckoutBrandingControl::fromArray($data['control']);
            }
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = ShopifyCheckoutBrandingDividerStyle::fromArray($data['divider']);
            }
            if (isset($data['expressCheckout']) && $data['expressCheckout'] !== null) {
                $instance->expressCheckout = ShopifyCheckoutBrandingExpressCheckout::fromArray($data['expressCheckout']);
            }
            if (isset($data['favicon']) && $data['favicon'] !== null) {
                $instance->favicon = ShopifyCheckoutBrandingImage::fromArray($data['favicon']);
            }
            if (isset($data['footer']) && $data['footer'] !== null) {
                $instance->footer = ShopifyCheckoutBrandingFooter::fromArray($data['footer']);
            }
            if (isset($data['global']) && $data['global'] !== null) {
                $instance->global = ShopifyCheckoutBrandingGlobal::fromArray($data['global']);
            }
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = ShopifyCheckoutBrandingHeader::fromArray($data['header']);
            }
            if (isset($data['headingLevel1']) && $data['headingLevel1'] !== null) {
                $instance->headingLevel1 = ShopifyCheckoutBrandingHeadingLevel::fromArray($data['headingLevel1']);
            }
            if (isset($data['headingLevel2']) && $data['headingLevel2'] !== null) {
                $instance->headingLevel2 = ShopifyCheckoutBrandingHeadingLevel::fromArray($data['headingLevel2']);
            }
            if (isset($data['headingLevel3']) && $data['headingLevel3'] !== null) {
                $instance->headingLevel3 = ShopifyCheckoutBrandingHeadingLevel::fromArray($data['headingLevel3']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = ShopifyCheckoutBrandingMain::fromArray($data['main']);
            }
            if (isset($data['merchandiseThumbnail']) && $data['merchandiseThumbnail'] !== null) {
                $instance->merchandiseThumbnail = ShopifyCheckoutBrandingMerchandiseThumbnail::fromArray($data['merchandiseThumbnail']);
            }
            if (isset($data['orderSummary']) && $data['orderSummary'] !== null) {
                $instance->orderSummary = ShopifyCheckoutBrandingOrderSummary::fromArray($data['orderSummary']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = ShopifyCheckoutBrandingButton::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = ShopifyCheckoutBrandingButton::fromArray($data['secondaryButton']);
            }
            if (isset($data['select']) && $data['select'] !== null) {
                $instance->select = ShopifyCheckoutBrandingSelect::fromArray($data['select']);
            }
            if (isset($data['textField']) && $data['textField'] !== null) {
                $instance->textField = ShopifyCheckoutBrandingTextField::fromArray($data['textField']);
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
