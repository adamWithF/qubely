<?php

/**
 * Registers the `qubely/postgrid` block on server.
 *
 * @since 1.1.0
 */
function register_block_qubely_pricing()
{
	// Check if the register function exists.
	if (!function_exists('register_block_type')) {
		return;
	}
	register_block_type(
		'qubely/pricing',
		array(
			'render_callback' => 'render_block_qubely_pricing',
			'attributes' => array(
  'uniqueId' =>
  array (
    'type' => 'string',
    'default' => '',
  ),
  'layout' =>
  array (
    'type' => 'number',
    'default' => 3,
  ),
  'defaultItems' =>
  array (
    'type' => 'number',
    'default' => 2,
  ),
  'alignment' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 'center',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-pricing {text-align: {{alignment}};}',
      ),
    ),
  ),
  'spacer' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'spaceTop' =>
      array (
        'md' => '10',
        'unit' => 'px',
      ),
      'spaceBottom' =>
      array (
        'md' => '10',
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}}',
      ),
    ),
  ),
  'copyStyle' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'title' =>
  array (
    'type' => 'string',
    'source' => 'html',
    'selector' => '.qubely-pricing-title',
    'default' => 'Basic',
  ),
  'titleColor' =>
  array (
    'type' => 'string',
    'default' => '#0081FF',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-title{color: {{titleColor}};}',
      ),
    ),
  ),
  'titleTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 20,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-title',
      ),
    ),
  ),
  'titleSpacing' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 0,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-title {margin-bottom: {{titleSpacing}};}',
      ),
    ),
  ),
  'subTitle' =>
  array (
    'type' => 'string',
    'source' => 'html',
    'selector' => '.qubely-sub-title',
    'default' => 'Best Choice for Individuals',
  ),
  'subTitleSpacing' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 20,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-sub-title-wrapper {margin-bottom: {{subTitleSpacing}};}',
      ),
    ),
  ),
  'subTitleColor' =>
  array (
    'type' => 'string',
    'default' => '#8F8E8E',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-sub-title{color: {{subTitleColor}};}',
      ),
    ),
  ),
  'subTitleTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 20,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-sub-title',
      ),
    ),
  ),
  'price' =>
  array (
    'type' => 'string',
    'default' => '49',
  ),
  'priceAlignment' =>
  array (
    'type' => 'string',
    'default' => 'center',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'priceAlignment',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-wrapper {justify-content: flex-start;}',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'priceAlignment',
            'relation' => '==',
            'value' => 'center',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-wrapper {justify-content: center;}',
      ),
      2 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'priceAlignment',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-wrapper {justify-content: flex-end;}',
      ),
      3 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'priceAlignment',
            'relation' => '==',
            'value' => 'left',
          ),
          1 =>
          array (
            'key' => 'durationPosition',
            'relation' => '==',
            'value' => 'bottom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-duration {text-align: left;}',
      ),
      4 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'priceAlignment',
            'relation' => '==',
            'value' => 'center',
          ),
          1 =>
          array (
            'key' => 'durationPosition',
            'relation' => '==',
            'value' => 'bottom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-duration {text-align: center;}',
      ),
      5 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'priceAlignment',
            'relation' => '==',
            'value' => 'right',
          ),
          1 =>
          array (
            'key' => 'durationPosition',
            'relation' => '==',
            'value' => 'bottom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-duration {text-align: right;}',
      ),
    ),
  ),
  'priceColor' =>
  array (
    'type' => 'string',
    'default' => '#ccc',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-price{color: {{priceColor}};}',
      ),
    ),
  ),
  'priceTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'height' =>
      array (
        'md' => 70,
        'unit' => 'px',
      ),
      'size' =>
      array (
        'md' => 70,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-price',
      ),
    ),
  ),
  'discount' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'discountPrice' =>
  array (
    'type' => 'string',
    'default' => '69',
  ),
  'discountColor' =>
  array (
    'type' => 'string',
    'default' => '#ccc',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-price strike{color: {{discountColor}};}',
      ),
    ),
  ),
  'discountTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 20,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-price strike',
      ),
    ),
  ),
  'pricingSpacing' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 20,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-wrapper {margin-bottom: {{pricingSpacing}};}',
      ),
    ),
  ),
  'headerBg' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'layout',
            'relation' => '==',
            'value' => 5,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing-header',
      ),
    ),
  ),
  'headerBorder' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openColor' => 1,
      'type' => 'color',
      'color' => '#f6f6f6',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'layout',
            'relation' => '==',
            'value' => 5,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing-header',
      ),
    ),
  ),
  'headerPadding' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openPadding' => 1,
      'paddingType' => 'global',
      'global' =>
      array (
        'md' => 20,
      ),
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'layout',
            'relation' => '==',
            'value' => 5,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing-header',
      ),
    ),
  ),
  'headerSpacing' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 30,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'layout',
            'relation' => '==',
            'value' => 5,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing-header {margin-bottom: {{headerSpacing}};}',
      ),
    ),
  ),
  'currency' =>
  array (
    'type' => 'string',
    'default' => '$',
  ),
  'currencyCustom' =>
  array (
    'type' => 'string',
    'default' => '',
  ),
  'currencyPosition' =>
  array (
    'type' => 'string',
    'default' => 'before',
  ),
  'currencyAlign' =>
  array (
    'type' => 'string',
    'default' => '10',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-currency{ display: inline-block; transform: translateY({{currencyAlign}}px); }',
      ),
    ),
  ),
  'currencyColor' =>
  array (
    'type' => 'string',
    'default' => '#CACCCE',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-currency{color: {{currencyColor}}; }',
      ),
    ),
  ),
  'currencyTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 34,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-currency',
      ),
    ),
  ),
  'productId' =>
  array (
    'type' => 'string',
    'default' => '',
  ),
  'enableDuration' =>
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'duration' =>
  array (
    'type' => 'string',
    'default' => '/Month',
  ),
  'durationPosition' =>
  array (
    'type' => 'string',
    'default' => 'side',
  ),
  'durationColor' =>
  array (
    'type' => 'string',
    'default' => '#CACCCE',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-duration{color: {{durationColor}};}',
      ),
    ),
  ),
  'durationAlign' =>
  array (
    'type' => 'string',
    'default' => '10',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'durationPosition',
            'relation' => '==',
            'value' => 'side',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-duration{transform: translateY({{durationAlign}}px); display: inline-block; }',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'durationPosition',
            'relation' => '==',
            'value' => 'bottom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-duration{ display: block; }',
      ),
    ),
  ),
  'durationTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 21,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-duration',
      ),
    ),
  ),
  'durationPadding' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openPadding' => 1,
      'paddingType' => 'custom',
      'custom' =>
      array (
        'md' => '10 0 10 0',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'durationPosition',
            'relation' => '==',
            'value' => 'bottom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-duration',
      ),
    ),
  ),
  'enableBadge' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'badge' =>
  array (
    'type' => 'string',
    'default' => 'Sale',
  ),
  'badgeStyle' =>
  array (
    'type' => 'number',
    'default' => 1,
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '!=',
            'value' => 3,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing {overflow: hidden;}',
      ),
    ),
  ),
  'badgePosition' =>
  array (
    'type' => 'string',
    'default' => 'left',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 1,
          ),
          1 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {left: -73px; transform: rotate(-45deg);}',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 1,
          ),
          1 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {right: -73px; transform: rotate(45deg);}',
      ),
      2 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 2,
          ),
          1 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {left: -50px; transform: rotate(-45deg);}',
      ),
      3 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 2,
          ),
          1 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {right: -50px; transform: rotate(45deg);}',
      ),
    ),
  ),
  'badgeSize' =>
  array (
    'type' => 'string',
    'default' => 'regular',
  ),
  'badgeSpacing' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 20,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 3,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {margin-top: {{badgeSpacing}};}',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 5,
          ),
          2 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {left: {{badgeSpacing}};}',
      ),
      2 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 5,
          ),
          2 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {right: {{badgeSpacing}};}',
      ),
      3 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 6,
          ),
          2 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {left: {{badgeSpacing}};}',
      ),
      4 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 6,
          ),
          2 =>
          array (
            'key' => 'badgePosition',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {right: {{badgeSpacing}};}',
      ),
    ),
  ),
  'badgeSpacingTop' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 20,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 5,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {top: {{badgeSpacingTop}};}',
      ),
    ),
  ),
  'badgeBg' =>
  array (
    'type' => 'string',
    'default' => '#50E3C2',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {background-color: {{badgeBg}};}',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 3,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge::before {border-color: {{badgeBg}} {{badgeBg}} transparent transparent;} {{QUBELY}} .qubely-block-pricing .qubely-pricing-badge::after {border-color: {{badgeBg}} transparent transparent {{badgeBg}};}',
      ),
      2 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 6,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge::before {border-color: {{badgeBg}} {{badgeBg}} transparent {{badgeBg}};}',
      ),
    ),
  ),
  'badgeColor' =>
  array (
    'type' => 'string',
    'default' => '#FFFFFF',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge {color: {{badgeColor}};}',
      ),
    ),
  ),
  'badgeTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 14,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge',
      ),
    ),
  ),
  'badgeRadius' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'paddingType' => 'global',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableBadge',
            'relation' => '==',
            'value' => true,
          ),
          1 =>
          array (
            'key' => 'badgeStyle',
            'relation' => '==',
            'value' => 5,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-pricing-badge',
      ),
    ),
  ),
  'bgColor' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openColor' => 1,
      'type' => 'color',
      'color' => '#FFFFFF',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-pricing',
      ),
    ),
  ),
  'bgPadding' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openPadding' => 1,
      'paddingType' => 'global',
      'global' =>
      array (
        'md' => 30,
      ),
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-pricing .qubely-block-pricing-content',
      ),
    ),
  ),
  'bgBorderRadius' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openBorderRadius' => 1,
      'radiusType' => 'global',
      'global' =>
      array (
        'md' => 10,
      ),
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-pricing',
      ),
    ),
  ),
  'bgBorder' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openBorder' => 1,
      'widthType' => 'global',
      'type' => 'solid',
      'color' => '#E5E7EA',
      'global' =>
      array (
        'md' => 1,
      ),
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-pricing',
      ),
    ),
  ),
  'bgShadow' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-pricing',
      ),
    ),
  ),
  'buttonGap' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 0,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-button {margin-bottom: {{buttonGap}};margin-top: {{buttonGap}};}',
      ),
    ),
  ),
  'enableButton' =>
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'controlledButtonPanel' =>
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'showButtonPanel' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'buttonText' =>
  array (
    'type' => 'string',
    'default' => 'Subscribe Now',
  ),
  'buttonPaddingTop' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 30,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-button{ padding-top: {{buttonPaddingTop}};}',
      ),
    ),
  ),
  'buttonPaddingBottom' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 10,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-button{ padding-bottom: {{buttonPaddingBottom}};}',
      ),
    ),
  ),
  'enablePostButtonText' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'postButtonText' =>
  array (
    'type' => 'string',
    'default' => '14 days money back gaurantee',
  ),
  'postButtonTextTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openTypography' => 1,
      'size' =>
      array (
        'md' => 16,
        'unit' => 'px',
      ),
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-pricing-post-button-text',
      ),
    ),
  ),
  'postButtonTextColor' =>
  array (
    'type' => 'string',
    'default' => '#696969',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enablePostButtonText',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-postbutton-text{ color: {{postButtonTextColor}};}',
      ),
    ),
  ),
  'postButtonTextPaddingTop' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 5,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enablePostButtonText',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-postbutton-text{ margin-top: {{postButtonTextPaddingTop}};}',
      ),
    ),
  ),
  'postButtonTextPaddingBottom' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 5,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enablePostButtonText',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-pricing-postbutton-text{ margin-bottom: {{postButtonTextPaddingBottom}};}',
      ),
    ),
  ),
  'enableFeatures' =>
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'controlledFeaturesPanel' =>
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'showFeaturesPanel' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'listItems' =>
  array (
    'type' => 'array',
    'default' =>
    array (
      0 =>
      array (
        'icon' => 'fas fa-check',
        'text' => 'Unlimited domain use',
        'customColor' => false,
      ),
      1 =>
      array (
        'icon' => 'fas fa-check',
        'text' => '1 year customer support',
        'customColor' => false,
      ),
      2 =>
      array (
        'icon' => 'fas fa-times',
        'text' => 'Access to all plugins',
        'customColor' => '#f00',
      ),
      3 =>
      array (
        'icon' => 'fas fa-check',
        'text' => 'Access to all themes',
        'customColor' => false,
      ),
    ),
  ),
  'clickedListItem' =>
  array (
    'type' => 'number',
    'default' => 0,
  ),
  'listType' =>
  array (
    'type' => 'string',
    'default' => 'unordered',
  ),
  'bulletStyle' =>
  array (
    'type' => 'string',
    'default' => 'check-circle-outline',
  ),
  'sourceOfCopiedStyle' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
	'productId' =>
	array(
		'type' => 'number',
		'default' => null
	)
	// ...globalAttributes,
	// ...buttonAttributes,
	// ...listAttributes,
			))
	);
}

function qubely_appdy_render_Currency_content($att) {
	$result = '';
	$currency = isset($att['currency']) ? $att['currency'] : '$';
	$currencyCustom = isset($att['currencyCustom']) ? $att['currencyCustom'] : '';

		if ($currency == 'custom') {
			$result = $currencyCustom;

		} else if ($currency == 'current') {
			$result = get_woocommerce_currency_symbol();
		}

		return sprintf('<span className="qubely-pricing-currency">%s</span>', $result);
}

function qubely_render_icon_list_save($att) {
	$listWraperGlobalClassName = '';
	$listItems = isset($att['listItems']) ? $att['listItems'] : array();
	$enableListIcons = isset($att['enableListIcons']) ? $att['enableListIcons'] : false;
	$iconColor = isset($att['iconColor']) ? $att['iconColor'] : '';
 	$iconPosition = isset($att['iconPosition']) ? $att['iconPosition'] : 'left';
	$listWraperClassName = isset($att['listWrapperClassName']) ? sprintf('qubely-list icon-position-%s', $iconPosition) : '';

	$html = sprintf('<ul class="%s %s">', $listWraperClassName, $listWraperGlobalClassName);

	for ($i=0; $i < count($listItems); $i++) {
		$item = $listItems[$i];

		if (strlen($item['text']) > 0) {
			$html .= sprintf('<li class="qubely-list-li qubely-icon-position-%s">', $iconPosition);
			$html .= sprintf('<div class="qubely-list-item qubely-list-item-%s">', $i);

			if ($enableListIcons && $iconPosition == 'left') {
				$html .= sprintf('<span class="qubely-list-item-icon %s fa-fw" style="%s" />', $item['icon'], isset($item['customColor']) ? 'color: ' . $item['customColor'] : '');
			}

			$html .= sprintf('<div class="qubely-list-item-text-%s qubely-text" id="qubely-list-item-text-%s">%s</div>', $i, $i, $item['text']);

			if ($enableListIcons && $iconPosition == 'right') {
				$html .= sprintf('<span class="qubely-list-item-icon %s fa-fw" style="%s" />', $item['icon'], isset($item['customColor']) ? 'color: ' . $item['customColor'] : '');
			}

			$html .= '</div>';
			$html .= '</li>';
		}
	}

	$html .= '</ul>';
	return $html;
}

function qubely_appdy_render_button_save($att) {
	$buttonUrl = isset($att['buttonUrl']) ? $att['buttonUrl'] : '#';
	$buttonText = isset($att['buttonText']) ? $att['buttonText'] : '';
	$enablePostButtonText = isset($att['enablePostButtonText']) ? $att['enablePostButtonText'] : false;
	$postButtonText = isset($att['postButtonText']) ? $att['postButtonText'] : '';

	$html = '<div class="qubely-pricing-button">';
	$html .= '<div class="qubely-block-btn-wrapper">';
	$html .= '<div class="qubely-block-btn">';
	$html .= sprintf('<a class="qubely-block-btn-anchor is-large" href="%s">%s</a>', $buttonUrl, $buttonText);
	$html .= '</div>';
	$html .= '</div>';

	if ($enablePostButtonText) {
		$html .= '<div className="qubely-pricing-postbutton-text">';
		$html .= sprintf('<span className="qubely-pricing-post-button-text">%s</span>', $postButtonText);
		$html .= '</div>';
	}

	$html .= '</div>';
	return $html;
}

function qubely_appdy_animation_attr($att) {
	$open_animation = isset($att['openAnimation']) ? $att['openAnimation'] : false;
	$name = isset($att['name']) ? $att['name'] : '';
	return $open_animation && !empty($name) ? sprintf('data-qubelyanimation="%s"', json_encode($att)) : '';
}

function render_block_qubely_pricing($att) {
	$uniqueId = isset($att['uniqueId']) ? $att['uniqueId'] : '';
	$layout = isset($att['layout']) ? $att['layout'] : 3;
	$enableBadge = isset($att['enableBadge']) ? $att['enableBadge'] : false;
	$interactionClass = isset($att['interactionClass']) ? $att['interactionClass'] : '';
	$badgeStyle = isset($att['badgeStyle']) ? $att['badgeStyle'] : '';
	$badgeSize = isset($att['badgeSize']) ? $att['badgeSize'] : '';
	$badge = isset($att['badge']) ? $att['badge'] : '';
	$title = isset($att['title']) ? $att['title'] : '';
	$subtitle = isset($att['subtitle']) ? $att['subtitle'] : '';
	$currencyPosition = isset($att['currencyPosition']) ? $att['currencyPosition'] : '';
	$enableDuration = isset($att['enableDuration']) ? $att['enableDuration'] : '';
	$durationPosition = isset($att['durationPosition']) ? $att['durationPosition'] : '';
	$duration = isset($att['duration']) ? $att['duration'] : '';
	$subTitle = isset($att['subTitle']) ? $att['subTitle'] : '';
	$enablePostButtonText = isset($att['enablePostButtonText']) ? $att['enablePostButtonText'] : '';
	$postButtonText = isset($att['postButtonText']) ? $att['postButtonText'] : '';
	$listAlignment = isset($att['listAlignment']) ? $att['listAlignment'] : '';
	$discountPrice = isset($att['discountPrice']) ? $att['discountPrice'] : '';
	$productId = isset($att['productId']) ? $att['productId'] : null;
	$price = isset($att['price']) ? $att['price'] : '';
	$discount = isset($att['discount']) ? $att['discount'] : null;
	$current_price = null;
	$enableFeatures = isset($att['enableFeatures']) ? $att['enableFeatures'] : false;
	$animation = isset($att['animation']) ? $att['animation'] : array();

	if ($productId) {
		$product_id = intval($_GET['$product_id']);
		$product = wc_get_product($product_id);
		$regular_price = is_on_sale() ? $product->get_sale_price() : $product->get_regular_price();
		$current_price = $product->get_price();
	}

	$html = '';
	$html .= sprintf('<div class="qubely-block-%s" %s>', $uniqueId, qubely_appdy_animation_attr($animation));
	$html .= sprintf('<div class="qubely-block-pricing %s">', $interactionClass);

	if ($enableBadge) {
		$html .= sprintf('<span class="qubely-pricing-badge qubely-badge-style-%s qubely-badge-size-%s"><span>%s</span></span>', $badgeStyle, $badgeSize, $badge);
	}

	$html .= '<div class="qubely-block-pricing-content">';
	$html .= '<div class="qubely-block-pricing-header">';
	$html .= '<span class="qubely-pricing-title-wrapper">';
	$html .= sprintf('<div class="qubely-pricing-title">%s</div>', $title);
	$html .= '</span>';

	if ($layout == 3 || $layout == 4) {
		$html .= '<div className="qubely-sub-title-wrapper">';
		$html .= sprintf('<div class="qubely-sub-title">%s</div>', $subtitle);
		$html .= '</div>';
	}

	$html .= '<div className="qubely-pricing-wrapper">';

	if ($currencyPosition == 'before') {
		$html .= qubely_appdy_render_Currency_content($att);
	}

	$html .= '<span className="qubely-pricing-price">';

	if ($discount) {
		$html .= sprintf('<strike>%s</strike>', $current_price ? $regular_price : $discountPrice);
	}

	$html .= $current_price ? $current_price : $price;
	$html .= '</span>';

	if ($currencyPosition == 'after') {
		$html .= qubely_appdy_render_Currency_content($att);
	}

	if ($enableDuration && $durationPosition == 'side') {
		$html .= '<span className="qubely-pricing-duration">';
		$html .= sprintf('<div class="qubely-product-duration">%s</div>', $duration);
    $html .= '</span>';
	}

	$html .= '</div>';

	if ($layout == 2) {
		$html .= '<div clsss="qubely-sub-title-wrapper">';
		$html .= sprintf('<div class="qubely-sub-title">%s</div>', $subTitle);
		$html .= '</div>';
	}

	//	</div>

	if ($layout == 4) {
		$html .= '<div class="qubely-pricing-button">';
		$html .= qubely_render_icon_list_save($att);

		if ($enablePostButtonText) {
			$html .= '<div class="qubely-pricing-postbutton-text">';
			$html .= sprintf('<span class="qubely-pricing-post-button-text">%s</span>', $postButtonText);
			$html .= '</div>';
		}
	}

	if ($enableFeatures) {
		$html .= sprintf('<div class="qubely-pricing-features qubely-alignment-%s">', $listAlignment);
		$html .= qubely_render_icon_list_save($att);
		$html .= '</div>';
	}

	if ($layout == 1 || $layout == 2 || $layout == 3 || $layout == 5) {
		$html .= '<div class="qubely-pricing-button">';
		$html .= qubely_appdy_render_button_save($att);

		if ($enablePostButtonText) {
			$html .= '<div class="qubely-pricing-postbutton-text">';
			$html .= sprintf('<span class="qubely-pricing-post-button-text">%s</span>', $postButtonText);
			$html .= '</div>';
		}

		$html .= '</div>';
	}

	$html .= '</div></div></div>';
	return $html;
}

if (!defined('QUBELY_PRO_VERSION')) {
	add_action('init', 'register_block_qubely_pricing', 100);
}
