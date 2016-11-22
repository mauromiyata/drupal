<?php

// template para Custom formatters
$rows = array();
foreach ($items as $delta => $item) {
  $entity = field_collection_item_load($item['value']);
  $wrapper = entity_metadata_wrapper('field_collection_item', $entity);
  $rows[] = array(
              array('data' => $wrapper->field_caracteristicas->name->value(), 'class' => array('title')), 
              array('data' => $wrapper->field_valor->value(), 'class' => array('value'))
            );
}

$output[] = array(
    '#theme' => 'table',
    '#rows' => $rows,
);
  
return $output;