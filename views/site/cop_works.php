<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 16.09.2017
 * Time: 17:28
 */
?>



<?= \app\components\StatisticsWidget::widget() ?>

<?= \app\components\TransitionWidget::widget([
    'pageName' => 'Текущие Задания',
    'button1' => ['НОВОСТИ', '/site/a-news'],
    'button2' => ['КОММЕНТАРИИ РЕДАКТОРА', '/site/a-comments'],
    'button3' => ['ТЕКУЩИЕ ЗАДАНИЯ', '/site/cop-works'],
    'button4' => ['ПОЛУЧИТЬ ЗАДАНИЕ', '/site/cop-get-work'],
]) ?>



<div class="content-tables">

    <div class="col-xs-12">
        <div class="cop-works">
            <table class="table table-bordered btn-default">
                <thead>
                    <tr>
                        <th>Пользователь</th>
                        <th>Тематика</th>
                        <th>Название</th>
                        <th>Статус</th>
                        <th>Объем</th>
                        <th>Время начала</th>
                        <th>Сроки сдачи</th>
                        <th>Действие</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nika</td>
                        <td>Сад и огород</td>
                        <td>Королевские помидоры</td>
                        <td>В работе</td>
                        <td>5500-7500</td>
                        <td>01.09.2017</td>
                        <td>02.09.2017</td>
                        <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
                    </tr>
                    <tr>
                        <td>Nika</td>
                        <td>Туризм</td>
                        <td>Курорты Мальты</td>
                        <td>Доработать</td>
                        <td>6000-7500</td>
                        <td>05.09.2017</td>
                        <td>06.09.2017</td>
                        <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
                    </tr>
                    <tr>
                        <td>Nika</td>
                        <td>Эзотерика</td>
                        <td>Сонник про персики</td>
                        <td>На проверке</td>
                        <td>3000-4500</td>
                        <td>15.09.2017</td>
                        <td>16.09.2017</td>
                        <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
                    </tr>
                    <tr>
                        <td>Nika</td>
                        <td>Строительство</td>
                        <td>Бетон Лотоса</td>
                        <td>Новое</td>
                        <td>5500-7500</td>
                        <td>25.09.2017</td>
                        <td>26.09.2017</td>
                        <td><a href="#" class="btn btn-link active btn-xs" role="button"><u>Посмотреть</u></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div><!-- .content-tables -->
