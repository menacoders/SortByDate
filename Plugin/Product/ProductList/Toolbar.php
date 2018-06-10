<?php
/*
 * Copyright © 2018 Mohammed Ibrahim. All rights reserved.
	* geek.php@hotmail.com
 */
namespace Mohdibra\SortByDate\Plugin\Product\ProductList;

/**
 * Class Toolbar
 * @package Mohdibra\SortByDate\Plugin\Product\ProductList
 */
class Toolbar
{
	/**
	 * Plugin
	 *
	 * @param \Magento\Catalog\Block\Product\ProductList\Toolbar $subject
	 * @param \Closure $proceed
	 * @param \Magento\Framework\Data\Collection $collection
	 * @return \Magento\Catalog\Block\Product\ProductList\Toolbar
	 */
	public function aroundSetCollection(
		\Magento\Catalog\Block\Product\ProductList\Toolbar $subject,
		\Closure $proceed,
		$collection
	) {
	
	$currentOrder = $subject->getCurrentOrder();
        $result = $proceed($collection);

        if ($currentOrder) {
            if ($currentOrder == 'created_at') {
                $subject->getCollection()->setOrder('created_at', 'desc');
            }
        }

        return $result;
	}
}
