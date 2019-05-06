<?php

$GLOBALS['TL_DCA']['tl_iso_product']['config']['ctable'][] = 'tl_content';

$GLOBALS['TL_DCA']['tl_iso_product']['list']['operations']['editheader'] = $GLOBALS['TL_DCA']['tl_iso_product']['list']['operations']['edit'];
$GLOBALS['TL_DCA']['tl_iso_product']['list']['operations']['editheader']['icon'] = 'header.gif';

$GLOBALS['TL_DCA']['tl_iso_product']['list']['operations']['edit'] = [
    'label'             => &$GLOBALS['TL_LANG']['tl_iso_product']['edit'],
    'href'              => 'table=tl_content',
    'icon'              => 'edit.gif',
];
