<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("test");  
?><?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("1� ����������");
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
        ��� �������� ��� ������ �� ��������� � ������-�������� 1� ? </h2>
    <div class="update-1C-list-block">
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ������������� �� �����������������. ��� �� ����� ������ �����.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ���������� �������� ������������ ����������� � ���� ����������� ������.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ��� �� ����� ���� ������, ���������� ����� ������������
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            � ������� ������ ������� �� ���������� �������������� ������.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ����������� ������������ ���������� �� ����� ������������� ��� �������.
        </div>
    </div>
    <div class="update-1C-text">
        ����������� ������� ��� ����������:
    </div>
    <div class="update-1C-link">
        <a href="javascript:void(0);" class="update-1C-polygon-in-circle" onclick="show_popup(4)"></a> 
        <a href="javascript:void(0);" class="update-1C-text-link" onclick="show_popup(4)">������� �������� ���</a> 
        <a href="javascript:void(0);" class="update-1C-polygon-in-circle" onclick="show_popup(5)"></a> 
        <a href="javascript:void(0);" class="update-1C-text-link" onclick="show_popup(5)">������������� �������� 1�</a>
    </div>
</div>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        �� ������ �������� 94% ������������������ ��� � ����������� ����������� 
    </h2>
    <div class="update-1C-text">
        ��� ������ ���:
    </div>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    ��������
                </th>
                <th>
                    ��������
                </th>
                <th>
                    ��������
                </th>
            </tr>
            <tr>
                <td>
                    ������ �� ��������� ���������� ���������� ������������ � ������� ����.
                </td>
                <td>
                    ��� ������������ ����� ���������� ���������� �����������.
                </td>
                <td>
                    ��� ������, ��������� � ���������� ����������, ���������� ������ �������������, �� ���������� ���������.
                </td>
            </tr>
        </tbody>
    </table>
    <a href="javascript:void(0);" class="update-1C-order-link" onclick="show_popup(1)">�������� ������</a>
</div>
<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
    ?> </span>
    <h2 class="h2">
        ��� �������� ��� ������ �� ��������� � ������-�������� 1� ? </h2>
    <div class="wrapper-with-margin">
        <div class="specific-info-block">
            <div class="specific-info-block-value">
                19
            </div>
            <div class="specific-info-block-name">
                ������������ �� ��������� 1�
            </div>
        </div>
        <div class="specific-info-block">
            <div class="specific-info-block-value">
                15
            </div>
            <div class="specific-info-block-name">
                ��� ����� ������ � 1�
            </div>
        </div>
    </div>
    <div class="update-1C-list-block">
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ��� ���������� ���������� ������� ���� ���������� �����������.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ������������ �������� ����������.
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ��� ��� �������. ������ ���� ����������
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
        �� ��������� ����� ������ ��������� 1� ��������� ������ </h2>
    <div class="wrapper-with-margin">
        <div class="product-version-block">
            <div class="product-version-block-value">
                ����������� 8. ���������� ���������
            </div>
            <div class="product-version-block-name">
                7.7�11
            </div>
        </div>
        <div class="product-version-block">
            <div class="product-version-block-value">
                �����������
            </div>
            <div class="product-version-block-name">
                7.7�3.0
            </div>
        </div>
        <div class="product-version-block">
            <div class="product-version-block-value">
                �������� � ���������� ���������� 8
            </div>
            <div class="product-version-block-name">
                7.7�3.0
            </div>
        </div>
    </div>
    <div class="update-1C-list-block">
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            �������� � ����� ���������� ���������� 8
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ����������� ���������������� ����������
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ���������� �������
        </div>
        <div class="update-1C-list">
            <div class="update-1C-list-circle">
            </div>
            ����������� �������
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
        ������� ���������� �������������� � 5 �������� ������ 
    </h2>
    <div class="wrapper-with-margin">
        <div class="update-order-block">
            <div class="block-wrapper">
                <div class="id-circle">
                    1
                </div>
                <div class="after-id-title">
                    ��������� � ���
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
                            �������� �������������� 1�
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>                           
                            �������� �������� 
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            ��������� .cf
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
                    ������
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
                            ����������� ������� ������
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            ������ ����
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
                    ������������
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
                            ���������� �������� �� ������������
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            ���������� ����
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
                    ���������� ��������
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
                            ����������
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            ������������
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            ��c�������
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
                    ���������
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
                            ������������ ����������� �� ����������
                        </div>
                        <div class="update-1C-list">
                            <div class="update-1C-list-circle">
                            </div>
                            ������������ ����
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>