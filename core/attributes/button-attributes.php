<?php

$qubely_appdy_buttonAttributes = array(
  'buttonText' =>
  array (
    'type' => 'string',
    'default' => '',
  ),
  'buttonFillType' =>
  array (
    'type' => 'string',
    'default' => 'fill',
  ),
  'buttonTag' =>
  array (
    'type' => 'string',
    'default' => 'a',
  ),
  'buttonUrl' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'url' => '#',
    ),
  ),
  'buttonSize' =>
  array (
    'type' => 'string',
    'default' => 'medium',
  ),
  'buttonAlignment' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 'left',
    ),
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'enableButtonAlignment',
            'relation' => '==',
            'value' => true,
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-wrapper {text-align: {{buttonAlignment}};}',
      ),
    ),
  ),
  'buttonWidthType' =>
  array (
    'type' => 'string',
    'default' => 'auto',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'buttonWidthType',
            'relation' => '==',
            'value' => 'block',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor {width:100%; display: -webkit-box; display: -ms-flexbox; display: flex;}',
      ),
    ),
  ),
  'buttonWidth' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 260,
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
            'key' => 'buttonWidthType',
            'relation' => '==',
            'value' => 'fixed',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor {width: {{buttonWidth}};}',
      ),
    ),
  ),
  'buttonPadding' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openPadding' => 1,
      'paddingType' => 'global',
      'global' =>
      array (
        'md' => 18,
      ),
      'custom' =>
      array (
        'md' => '10 10 10 10',
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
            'key' => 'buttonSize',
            'relation' => '==',
            'value' => 'custom',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor',
      ),
    ),
  ),
  'buttonTypography' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor',
      ),
    ),
  ),
  'buttonColor' =>
  array (
    'type' => 'string',
    'default' => '#000',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'buttonFillType',
            'relation' => '==',
            'value' => 'fill',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor { color:{{buttonColor}}; }',
      ),
    ),
  ),
  'buttonColor2' =>
  array (
    'type' => 'string',
    'default' => '#2184F9',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'buttonFillType',
            'relation' => '!=',
            'value' => 'fill',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor { color:{{buttonColor2}}; }',
      ),
    ),
  ),
  'buttonHoverColor' =>
  array (
    'type' => 'string',
    'default' => '#fff',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'buttonFillType',
            'relation' => '==',
            'value' => 'fill',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor:hover { color:{{buttonHoverColor}}; }',
      ),
    ),
  ),
  'buttonHoverColor2' =>
  array (
    'type' => 'string',
    'default' => '#1066CC',
    'style' =>
    array (
      0 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'buttonFillType',
            'relation' => '!=',
            'value' => 'fill',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor:hover { color:{{buttonHoverColor2}}; }',
      ),
    ),
  ),
  'buttonBgColor' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'type' => 'color',
      'openColor' => 1,
      'color' => '#2184F9',
      'gradient' =>
      array (
        'color1' => '#1066CC',
        'color2' => '#2184F9',
        'direction' => 0,
        'start' => 0,
        'stop' => 100,
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
            'key' => 'buttonFillType',
            'relation' => '==',
            'value' => 'fill',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor',
      ),
    ),
  ),
  'buttonBgHoverColor' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'type' => 'color',
      'openColor' => 1,
      'color' => '#1066CC',
      'gradient' =>
      array (
        'color1' => '#2184F9',
        'color2' => '#1066CC',
        'direction' => 0,
        'start' => 0,
        'stop' => 100,
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
            'key' => 'buttonFillType',
            'relation' => '==',
            'value' => 'fill',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor:before',
      ),
    ),
  ),
  'buttonBorder' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openBorder' => 1,
      'widthType' => 'global',
      'global' => 1,
      'color' => '#2184F9',
      'type' => 'solid',
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor',
      ),
    ),
  ),
  'buttonBorderHoverColor' =>
  array (
    'type' => 'string',
    'default' => '#1066CC',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor:hover {border-color: {{buttonBorderHoverColor}};}',
      ),
    ),
  ),
  'buttonBorderRadius' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'openBorderRadius' => 1,
      'radiusType' => 'global',
      'global' =>
      array (
        'md' => 4,
      ),
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor',
      ),
    ),
  ),
  'buttonShadow' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor',
      ),
    ),
  ),
  'buttonHoverShadow' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-anchor:hover',
      ),
    ),
  ),
  'buttonIconName' =>
  array (
    'type' => 'string',
    'default' => '',
  ),
  'buttonIconPosition' =>
  array (
    'type' => 'string',
    'default' => 'right',
  ),
  'buttonIconSize' =>
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
            'key' => 'buttonIconName',
            'relation' => '!=',
            'value' => '',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-btn-icon {font-size: {{buttonIconSize}}}',
      ),
    ),
  ),
  'buttonIconGap' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 8,
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
            'key' => 'buttonIconName',
            'relation' => '!=',
            'value' => '',
          ),
          1 =>
          array (
            'key' => 'buttonIconPosition',
            'relation' => '==',
            'value' => 'left',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-btn-icon { margin-right: {{buttonIconGap}}; }',
      ),
      1 =>
      array (
        'condition' =>
        array (
          0 =>
          array (
            'key' => 'buttonIconName',
            'relation' => '!=',
            'value' => '',
          ),
          1 =>
          array (
            'key' => 'buttonIconPosition',
            'relation' => '==',
            'value' => 'right',
          ),
        ),
        'selector' => '{{QUBELY}} .qubely-btn-icon { margin-left: {{buttonIconGap}}; }',
      ),
    ),
  ),
  'buttonGap' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => 8,
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} .qubely-block-btn-wrapper { margin-bottom: {{buttonGap}}; }',
      ),
    ),
  ),
);


?>
