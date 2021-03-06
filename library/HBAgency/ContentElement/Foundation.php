<?php

/**
 * Zurb Foundation integration for Contao Open Source CMS
 *
 * Copyright (C) 2014 HB Agency
 *
 * @package    Zurb_Foundation
 * @link       http://www.hbagency.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
 
 namespace HBAgency\ContentElement;
 
 use Contao\ContentElement as Contao_CE;
 
 /**
 * Class Foundation 
 *
 * Base class for Foundation ContentElements
 * @copyright  2014 HB Agency
 * @author     Blair Winans <bwinans@hbagency.com>
 * @package    Zurb_Foundation
 */
abstract class Foundation extends Contao_CE
{

    /**
     * Initialize the content element
     * @param object
     */
    public function __construct($objElement)
    {
        parent::__construct($objElement);
    }


}