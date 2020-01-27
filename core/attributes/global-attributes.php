<?php

$qubely_appdy_globalAttributes = array(
  'animation' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
  ),
  'interaction' =>
  array (
    'type' => 'object',
    'default' =>
    array (
    ),
  ),
  'enablePosition' =>
  array (
    'type' => 'boolean',
    'default' => false,
  ),
  'selectPosition' =>
  array (
    'type' => 'string',
    'default' => 'relative',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} {position:{{selectPosition}};}',
      ),
    ),
  ),
  'positionXaxis' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => '',
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} {left:{{positionXaxis}};}',
      ),
    ),
  ),
  'positionYaxis' =>
  array (
    'type' => 'object',
    'default' =>
    array (
      'md' => '',
      'unit' => 'px',
    ),
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} {top:{{positionYaxis}};}',
      ),
    ),
  ),
  'globalZindex' =>
  array (
    'type' => 'string',
    'default' => '0',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}} {z-index:{{globalZindex}};}',
      ),
    ),
  ),
  'hideTablet' =>
  array (
    'type' => 'boolean',
    'default' => false,
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}}{display:none;}',
      ),
    ),
  ),
  'hideMobile' =>
  array (
    'type' => 'boolean',
    'default' => false,
    'style' =>
    array (
      0 =>
      array (
        'selector' => '{{QUBELY}}{display:none;}',
      ),
    ),
  ),
  'globalCss' =>
  array (
    'type' => 'string',
    'default' => '',
    'style' =>
    array (
      0 =>
      array (
        'selector' => '',
      ),
    ),
  ),
);

?>
