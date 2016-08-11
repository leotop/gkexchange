<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("test");  
?><?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("1С Обновление");
?> 
<link href="/temp_css_to_test/style.css" rel="stylesheet">

<?$block_id = 0; ?>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        Что отличает наш сервис от обращения к фирмам-партнёрам 1С ? </h2>
    <div class="update-1C-list-block">
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Независимость от месторасположения. Вам не нужно никуда ехать.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Обновление типового программного обеспечения в день поступления заявки.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Нам не нужны ваши данные, достаточно файла конфигурации
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            К каждому нашему клиенту мы используем индивидуальный подход.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Возможность единоразовых обновлений по факту необходимости для клиента.
        </div>
    </div>
    <div class="update-1C-text">
        Необходимые условия для обновления:
    </div>
    <div class="update-1C-link">
        <a href="javascript:void(0);" class="update-1C-polygon-in-circle" onclick="show_popup(4)"></a> 
        <a href="javascript:void(0);" class="update-1C-text-link" onclick="show_popup(4)">Наличие подписки ИТС</a> 
        <a href="javascript:void(0);" class="update-1C-polygon-in-circle" onclick="show_popup(5)"></a> 
        <a href="javascript:void(0);" class="update-1C-text-link" onclick="show_popup(5)">Лицензинность программ 1С</a>
    </div>
</div>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        Мы сможем обновить 94% сконфигурированных баз с сохранением функционала 
    </h2>
    <div class="update-1C-text">
        Наш сервис это:
    </div>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    Экономия
                </th>
                <th>
                    Гарантии
                </th>
                <th>
                    Качество
                </th>
            </tr>
            <tr>
                <td>
                    Скидки на стоимость обновления измененной конфигурации в течение года.
                </td>
                <td>
                    Все конфигурации после проведения обновления тестируются.
                </td>
                <td>
                    Все ошибки, возникшие в результате обновления, допущенные нашими специалистами, мы исправляем бесплатно.
                </td>
            </tr>
        </tbody>
    </table>
    <a href="javascript:void(0);" class="update-1C-order-link" onclick="show_popup(1)">Заказать проект</a>
</div>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        Что отличает наш сервис от обращения к фирмам-партнёрам 1С ? </h2>
    <div class="wrapper-with-margin">
        <div class="specific-info-block">
            <div class="specific-info-block-value">
                19
            </div>
            <div class="specific-info-block-name">
                сертификатов по платформе 1С
            </div>
        </div>
        <div class="specific-info-block">
            <div class="specific-info-block-value">
                15
            </div>
            <div class="specific-info-block-name">
                лет опыта работы с 1С
            </div>
        </div>
    </div>
    <div class="update-1C-list-block">
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            При регулярном обновлении типовой срок обновления уменьшается.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Отработанный механизм обновлений.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Это наш профиль. Только этим занимаемся
        </div>
    </div>
</div>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        Мы обновляем целый спектр продуктов 1С различных версий </h2>
    <div class="wrapper-with-margin">
        <div class="product-version-block">
            <div class="product-version-block-value">
                Предприятие 8. Управление торговлей
            </div>
            <div class="product-version-block-name">
                7.7–11
            </div>
        </div>
        <div class="product-version-block">
            <div class="product-version-block-value">
                Бухгалтерия
            </div>
            <div class="product-version-block-name">
                7.7–3.0
            </div>
        </div>
        <div class="product-version-block">
            <div class="product-version-block-value">
                Зарплата и Управление Персоналом 8
            </div>
            <div class="product-version-block-name">
                7.7–3.0
            </div>
        </div>
    </div>
    <div class="update-1C-list-block">
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Зарплата и кадры бюджетного учреждения 8
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Бухгалтерия государственного учреждения
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Отраслевые решения
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            Совместимые решения
        </div>
    </div>
</div>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        Порядок обновления осуществляется в 5 ключевых этапов 
    </h2>
    <div class="wrapper-with-margin">
        <div class="update-order-block">
            <div class="block-wrapper">
                <div class="id-circle">
                    1
                </div>
                <div class="after-id-title">
                    Обращение к нам
                </div>
            </div>
            <div class="block-wrapper">
                <div class="block-with-list">
                    <div class="separation-line">
                        <div class="line">
                        </div>
                        <div class="separation-line-cirlce">
                        </div>
                    </div>
                    <div class="update-1C-list-block">
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Проверка лицензионности 1С
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>                           
                            Проверка подписки 
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Получение .cf
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="update-order-block">
            <div class="block-wrapper">
                <div class="id-circle">
                    2
                </div>
                <div class="after-id-title">
                    Анализ
                </div>
            </div>
            <div class="block-wrapper">
                <div class="block-with-list">
                    <div class="separation-line">
                        <div class="line">
                        </div>
                        <div class="separation-line-cirlce">
                        </div>
                    </div>
                    <div class="update-1C-list-block">
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Определение текущей версии
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Анализ базы
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="update-order-block">
            <div class="block-wrapper">
                <div class="id-circle">
                    3
                </div>
                <div class="after-id-title">
                    Согласование
                </div>
            </div>
            <div class="block-wrapper">
                <div class="block-with-list">
                    <div class="separation-line">
                        <div class="line">
                        </div>
                        <div class="separation-line-cirlce">
                        </div>
                    </div>
                    <div class="update-1C-list-block">
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Заключение договора на обслуживание
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Обновление базы
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <div class="update-order-block">
            <div class="block-wrapper">
                <div class="id-circle">
                    4
                </div>
                <div class="after-id-title">
                    Заключение договора
                </div>
            </div>
            <div class="block-wrapper">
                <div class="block-with-list">
                    <div class="separation-line">
                        <div class="line">
                        </div>
                        <div class="separation-line-cirlce">
                        </div>
                    </div>
                    <div class="update-1C-list-block">
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Обновление
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Тестирование
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Инcтрукция
                        </div>
                    </div>
                </div>
            </div>       
        </div>
        <div class="update-order-block">
            <div class="block-wrapper">
                <div class="id-circle">
                    5
                </div>
                <div class="after-id-title">
                    Результат
                </div>
            </div>
            <div class="block-wrapper">
                <div class="block-with-list">
                    <div class="white-line"></div>
                    <div class="separation-line">
                        <div class="line">
                        </div>
                        <div class="separation-line-cirlce">
                        </div>
                    </div>
                    <div class="update-1C-list-block">
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Коммерческое предложение на обновление
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            Согласование цены
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>