<?php

$qubely_appdy_listAttributes = array(
  'enableListAlignment' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'listAlignment' =>
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
            'key' => 'enableListAlignment',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-list {text-align:{{listAlignment}};}',
      ),
    ),
  ),
  'listItems' =>
  array (
    'type' => 'array',
    'default' =>
    array (
      0 =>
      array (
        'icon' => 'far fa-star',
        'text' => 'Add beautiful icons and text to this block',
      ),
      1 =>
      array (
        'icon' => 'far fa-heart',
        'text' => 'Set icon color for normal and hover state',
      ),
      2 =>
      array (
        'icon' => 'fas fa-check',
        'text' => 'Manage space between icon and the text',
      ),
      3 =>
      array (
        'icon' => 'fas fa-burn',
        'text' => 'Choose a desired layout from the list',
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
  'typography' =>
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
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-li',
      ),
    ),
  ),
  'enableListIcons' =>
  array (
    'type' => 'boolean',
    'default' => true,
  ),
  'iconSize' =>
  array (
    'type' => 'string',
    'default' => '16px',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'iconSize',
            'relation' => '!=',
            'value' => 'custom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-item-icon {font-size: {{iconSize}};}',
      ),
    ),
  ),
  'iconSizeCustom' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 16,
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
            'key' => 'iconSize',
            'relation' => '==',
            'value' => 'custom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-item-icon {font-size: {{iconSizeCustom}};}',
      ),
    ),
  ),
  'iconPosition' =>
  array (
    'type' => 'string',
    'default' => 'left',
  ),
  'iconSpacing' =>
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
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'iconPosition',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-item-icon {margin-right: {{iconSpacing}};}',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'iconPosition',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-item-icon {margin-left: {{iconSpacing}};}',
      ),
    ),
  ),
  'iconColor' =>
  array (
    'type' => 'string',
    'default' => '#5D7FEB',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-li .qubely-list-item-icon {color: {{iconColor}};}',
      ),
    ),
  ),
  'color' =>
  array (
    'type' => 'string',
    'default' => '#333',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-li .qubely-text{color: {{color}};}',
      ),
    ),
  ),
  'spacing' =>
  array (
    'type' => 'string',
    'default' => '5',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-list .qubely-list-li:not(:last-child) {margin-bottom: {{spacing}}px;}',
      ),
    ),
  ),
  'featuresPadding' =>
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
        'selector' => '{{QUBELY}} .qubely-pricing-features',
      ),
    ),
  ),
);


?>
