<?php

use kartik\grid\GridView;
use kartik\export\ExportMenu;

    $gridColumns = [
        ['class' => 'yii\grid\SerialColumn'],
        'surname',
        'firstName',
        'patronymic',
        'dateOfBirth',
        'address',
        'number',
       ];

    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'clearBuffers' => true, 
    ]);

    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns
    ]);
 

