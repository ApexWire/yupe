<?php
$this->breadcrumbs = [
    Yii::t('PaymentModule.payment', 'Способы оплаты') => ['/payment/paymentBackend/index'],
    $model->name => ['/payment/paymentBackend/view', 'id' => $model->id],
    Yii::t('PaymentModule.payment', 'Редактирование')
];

$this->pageTitle = Yii::t('PaymentModule.payment', 'Способы оплаты - редактирование');

$this->menu = [
    ['icon' => 'fa fa-fw fa-list-alt', 'label' => Yii::t('PaymentModule.payment', 'Управление способами оплаты'), 'url' => ['/payment/paymentBackend/index']],
    ['icon' => 'fa fa-fw fa-plus-square', 'label' => Yii::t('PaymentModule.payment', 'Добавить способ оплаты'), 'url' => ['/payment/paymentBackend/create']],
    ['label' => Yii::t('PaymentModule.payment', 'Способ оплаты') . ' «' . mb_substr($model->name, 0, 32) . '»'],
    [
        'icon' => 'fa fa-fw fa-pencil',
        'label' => Yii::t('PaymentModule.payment', 'Редактирование способ оплаты'),
        'url' => [
            '/payment/paymentBackend/update',
            'id' => $model->id
        ]
    ],
    [
        'icon' => 'fa fa-fw fa-trash-o',
        'label' => Yii::t('PaymentModule.payment', 'Удалить способ оплаты'),
        'url' => '#',
        'linkOptions' => [
            'submit' => ['/payment/paymentBackend/delete', 'id' => $model->id],
            'confirm' => Yii::t('PaymentModule.payment', 'Вы уверены, что хотите удалить способ оплаты?'),
            'params' => [Yii::app()->getRequest()->csrfTokenName => Yii::app()->getRequest()->csrfToken],
            'csrf' => true
        ]
    ]
];
?>
<div class="page-header">
    <h1>
        <?php echo Yii::t('PaymentModule.payment', 'Редактирование') . ' ' . Yii::t('PaymentModule.payment', 'способа оплаты'); ?><br/>
        <small>&laquo;<?php echo $model->name; ?>&raquo;</small>
    </h1>
</div>

<?php echo $this->renderPartial('_form', ['model' => $model]); ?>
