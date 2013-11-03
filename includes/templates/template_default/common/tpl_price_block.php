<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id$
 */

/**
 * Builds priceBox div, containing relevant price components including specials, discounts, etc.
 *
 * DEPENDENCIES:
 * Depends on $price_array being an array with all relevant pricing data, as generated by zen_get_products_output_price()
 * Also expects $link to be a URL to the product, if a link is to be generated. Otherwise it should be blank.
 *
 * OUTPUT:
 * The following variable will contain the content of the resulting output:
 * $products_price
 */
?>
<?php
$block = '';
if (is_array($price_array)) {
// $block .= '<pre>'.print_r($price_array, true).'</pre>';
  $block .= '<div class="priceBox' . ($price_array['starting_at'] ? ' starting-at' : '') . '">' . "\n";
  if ($price_array['call_tag'] != '') {
    $block .= '  <div class="call4price">' . $price_array['call_tag'] . '</div>' . "\n";
  }
  if ($price_array['free_tag'] != '') {
    $block .= '  <div class="freeTag">' . $price_array['free_tag'] . '</div>' . "\n";
  }
  if ($price_array['show_special_price'] . $price_array['show_sale_price'] . $price_array['show_sale_discount'] == '' && ($price_array['call_tag'] == '')) {
    $block .=    $price_array['one_time'];
    $block .= '  <span class="finalPriceHeading">' . TEXT_PRICE_HEADING . '</span>';
    $block .= '  <div class="final-price">' . $price_array['show_normal_price'] . '</div>' . "\n";
  } else {
    $block .= $price_array['starting_at'] ? '<span class="startingAtPriceHeading">' . TEXT_BASE_PRICE . '</span>' : '	 <span class="finalPriceHeading">' . TEXT_PRICE_HEADING . '</span>';
    $block .= '	 <span class="discountsHeading">' . TEXT_DISCOUNTS_HEADING . '</span>';
    $block .=      $price_array['one_time'];
    if ($price_array['show_normal_price'])  $block .= '  <div class="normalprice">' . $price_array['show_normal_price'] . '</div>' . "\n";
    if ($price_array['show_special_price']) $block .= '  <div class="productSpecialPrice">' . $price_array['show_special_price'] . '</div>' . "\n";

    if ($price_array['special'] != '' && $price_array['sale'] != '') {
      if ($price_array['special'] < $price_array['sale']) {
        $block .= '  <div class="productSpecialPriceBest">' . $price_array['show_special_price_sale'] . '</div>' . "\n";
      } elseif ($price_array['sale'] < $price_array['special']) {
        if ($price_array['show_special_price'] == '') {
          $block .= '  <div class="productSalePrice">' . $price_array['show_special_price_sale'] . '</div>' . "\n";
        } else {
          $block .= '  <div class="productSalePriceBest">' . $price_array['show_special_price_sale'] . '</div>' . "\n";
        }
      }
    } else {
      if ($price_array['show_special_price_sale']) $block .= '  <div class="productSpecialPrice">' . $price_array['show_special_price_sale'] . '</div>' . "\n";
    }

    if ($price_array['show_sale_price']) {
      if ($price_array['sale'] < $price_array['special'] || ($price_array['show_special_price'] == '' && $price_array['show_special_price_sale'] == '')) {
        $block .= '  <div class="productSalePriceBest">' . $price_array['show_sale_price'] . '</div>' . "\n";
      } else {
        $block .= '  <div class="productSalePrice">' . $price_array['show_sale_price'] . '</div>' . "\n";
      }
    }

    if ($price_array['show_sale_discount'] . $price_array['show_discount_amount']) $block .= '  <div class="productPriceDiscount">' . $price_array['show_sale_discount'] . $price_array['show_discount_amount']. '</div>' . "\n";
  }
  if (isset($link) && $link != '') {
    $block .= '  <a class="linkArrow" href="' . $link . '"><i class="icon-right-open-big"></i><span>' . MORE_INFO_TEXT . '</span></a>';
  }

  $block .= '</div>' . "\n";

} elseif (is_string($price_array)) {
  $products_price = $block = $price_array;
}
// return the output after clearing the temporary build variable:
$products_price = $block;
unset($block);
