<?php
/*
 * Copyright © 2018 Mohammed Ibrahim. All rights reserved.
	* geek.php@hotmail.com
 */
namespace Mohdibra\SortByDate\Plugin\Model;

use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Config
 * @package Mohdibra\SortByDate\Plugin\Model
 */
class Config  {

	/**
	 * @var StoreManagerInterface
	 */
	protected $_storeManager;

	/**
	 * Config constructor.
	 * @param StoreManagerInterface $storeManager
	 *
	 */
	public function __construct(
		StoreManagerInterface $storeManager
	) {
		$this->_storeManager = $storeManager;
	}

	/**
	 * Adding custom options and changing labels
	 *
	 * @param \Magento\Catalog\Model\Config $catalogConfig
	 * @param [] $options
	 * @return []
	 */
	public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
	{
		$default_options = [];
		$default_options['name'] = $options['name'];
		$customOption['created_at'] = __('Date');
		$customOption['price'] = __('Price');
		$customOption['name'] = $default_options['name'];

		$options = array_merge($customOption);

		return $options;
	}
}
