<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingControl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingImageValue;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingFooter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingMain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingButton;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingSelect;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingShared;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutAndAccountsConfigurationBrandingTextField;

class ShopifyCheckoutAndAccountsConfigurationBrandingComponents
{
    protected $checkbox;
    protected $choiceList;
    protected $control;
    protected $divider;
    protected $favicon;
    protected $footer;
    protected $header;
    protected $headingLevel1;
    protected $headingLevel2;
    protected $headingLevel3;
    protected $main;
    protected $merchandiseThumbnail;
    protected $primaryButton;
    protected $secondaryButton;
    protected $select;
    protected $shared;
    protected $textField;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox
     */
    public function getCheckbox()
    {
        return $this->checkbox;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList
     */
    public function getChoiceList()
    {
        return $this->choiceList;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingControl
     */
    public function getControl()
    {
        return $this->control;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle
     */
    public function getDivider()
    {
        return $this->divider;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImageValue
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFooter
     */
    public function getFooter()
    {
        return $this->footer;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
     */
    public function getHeadingLevel1()
    {
        return $this->headingLevel1;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
     */
    public function getHeadingLevel2()
    {
        return $this->headingLevel2;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
     */
    public function getHeadingLevel3()
    {
        return $this->headingLevel3;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMain
     */
    public function getMain()
    {
        return $this->main;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail
     */
    public function getMerchandiseThumbnail()
    {
        return $this->merchandiseThumbnail;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingButton
     */
    public function getPrimaryButton()
    {
        return $this->primaryButton;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingButton
     */
    public function getSecondaryButton()
    {
        return $this->secondaryButton;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSelect
     */
    public function getSelect()
    {
        return $this->select;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingShared
     */
    public function getShared()
    {
        return $this->shared;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingTextField
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
            if (isset($data['checkbox']) && $data['checkbox'] !== null) {
                $instance->checkbox = ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox::fromArray($data['checkbox']);
            }
            if (isset($data['choiceList']) && $data['choiceList'] !== null) {
                $instance->choiceList = ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList::fromArray($data['choiceList']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = ShopifyCheckoutAndAccountsConfigurationBrandingControl::fromArray($data['control']);
            }
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle::fromArray($data['divider']);
            }
            if (isset($data['favicon']) && $data['favicon'] !== null) {
                $instance->favicon = ShopifyCheckoutAndAccountsConfigurationBrandingImageValue::fromArray($data['favicon']);
            }
            if (isset($data['footer']) && $data['footer'] !== null) {
                $instance->footer = ShopifyCheckoutAndAccountsConfigurationBrandingFooter::fromArray($data['footer']);
            }
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = ShopifyCheckoutAndAccountsConfigurationBrandingHeader::fromArray($data['header']);
            }
            if (isset($data['headingLevel1']) && $data['headingLevel1'] !== null) {
                $instance->headingLevel1 = ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel::fromArray($data['headingLevel1']);
            }
            if (isset($data['headingLevel2']) && $data['headingLevel2'] !== null) {
                $instance->headingLevel2 = ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel::fromArray($data['headingLevel2']);
            }
            if (isset($data['headingLevel3']) && $data['headingLevel3'] !== null) {
                $instance->headingLevel3 = ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel::fromArray($data['headingLevel3']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = ShopifyCheckoutAndAccountsConfigurationBrandingMain::fromArray($data['main']);
            }
            if (isset($data['merchandiseThumbnail']) && $data['merchandiseThumbnail'] !== null) {
                $instance->merchandiseThumbnail = ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail::fromArray($data['merchandiseThumbnail']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = ShopifyCheckoutAndAccountsConfigurationBrandingButton::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = ShopifyCheckoutAndAccountsConfigurationBrandingButton::fromArray($data['secondaryButton']);
            }
            if (isset($data['select']) && $data['select'] !== null) {
                $instance->select = ShopifyCheckoutAndAccountsConfigurationBrandingSelect::fromArray($data['select']);
            }
            if (isset($data['shared']) && $data['shared'] !== null) {
                $instance->shared = ShopifyCheckoutAndAccountsConfigurationBrandingShared::fromArray($data['shared']);
            }
            if (isset($data['textField']) && $data['textField'] !== null) {
                $instance->textField = ShopifyCheckoutAndAccountsConfigurationBrandingTextField::fromArray($data['textField']);
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
            if ($this->checkbox !== null) {
                $data['checkbox'] = $this->checkbox->asArray();
            }
            if ($this->choiceList !== null) {
                $data['choiceList'] = $this->choiceList->asArray();
            }
            if ($this->control !== null) {
                $data['control'] = $this->control->asArray();
            }
            if ($this->divider !== null) {
                $data['divider'] = $this->divider->asArray();
            }
            if ($this->favicon !== null) {
                $data['favicon'] = $this->favicon->asArray();
            }
            if ($this->footer !== null) {
                $data['footer'] = $this->footer->asArray();
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
            if ($this->primaryButton !== null) {
                $data['primaryButton'] = $this->primaryButton->asArray();
            }
            if ($this->secondaryButton !== null) {
                $data['secondaryButton'] = $this->secondaryButton->asArray();
            }
            if ($this->select !== null) {
                $data['select'] = $this->select->asArray();
            }
            if ($this->shared !== null) {
                $data['shared'] = $this->shared->asArray();
            }
            if ($this->textField !== null) {
                $data['textField'] = $this->textField->asArray();
            }
            return $data;
        }
}
