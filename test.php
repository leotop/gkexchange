<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("test");  
    //$APPLICATION->SetAdditionalCSS($_SERVER["DOCUMENT_ROOT"]."/temp_css_to_test/style.css")
?>

<?
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
        ?>
    </span>
    <h2 class="h2">
        ��� �������� ��� ������ �� ��������� � ������-�������� 1� ?
    </h2>
    <div class='update-1C-list-block'>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
            <?/*$arVal*/?>
            ������������� �� �����������������. ��� �� ����� ������ �����. 
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
            ���������� �������� ������������ ����������� � ���� ����������� ������.
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
            ��� �� ����� ���� ������, ���������� ����� ������������
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
            � ������� ������ ������� �� ���������� �������������� ������.
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
            ����������� ������������ ���������� �� ����� ������������� ��� �������.
        </div>
    </div>       
    <div class="update-1C-text">
        ����������� ������� ��� ����������:
    </div>
    <div class = "update-1C-link">
        <a href="javascript:void(0);" class = "update-1C-polygon-in-circle"></a>
        <a href='javascript:void(0);' class = "update-1C-text-link">������� �������� ���</a>

        <a href="javascript:void(0);" class = "update-1C-polygon-in-circle"></a>
        <a href='javascript:void(0);' class = "update-1C-text-link">������������� �������� 1�</a>
    </div>
</div>

<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
        ?>
    </span>
    <h2 class="h2">
        ��� �������� ��� ������ �� ��������� � ������-�������� 1� ?
    </h2>
    <table class="table">
        <tr>
            <th>��������</th><th>��������</th><th>��������</th>
        </tr>
        <tr>
            <td>������ �� ��������� ���������� ���������� ������������ � ������� ����.</td>
            <td>��� ������������ ����� ���������� ���������� �����������.</td>
            <td>��� ������, ��������� � ���������� ����������, ���������� ������ �������������, �� ���������� ���������.</td>
        </tr>
    </table>

    <a href="javascript:void(0);" class="update-1C-order-link" onclick="show_popup(1)">�������� ������</a> 
           
</div>

<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
        ?>
    </span>
    <h2 class="h2">
        ��� �������� ��� ������ �� ��������� � ������-�������� 1� ?
    </h2>

    <div class='block-wrapper'>
        <div class='specific-info-block'>
            <div class='specific-info-block-value'>
                19            
            </div> 
            <div class='specific-info-block-name'>
                ������������ �� ��������� 1�          
            </div>
        </div> 
        <div class='specific-info-block'>
            <div class='specific-info-block-value'>
                15           
            </div>
            <div class='specific-info-block-name'>
                ��� ����� ������ � 1�                      
            </div> 
        </div>
    </div>

    <div class='update-1C-list-block'>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                ��� ���������� ���������� ������� ���� ���������� �����������.
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                ������������ �������� ����������.
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                ��� ��� �������. ������ ���� ����������
        </div>
    </div>
</div>

<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
        ?>
    </span>
    <h2 class="h2">
        �� ��������� ����� ������ ��������� 1� ��������� ������
    </h2>
    
    <div class='block-wrapper'>
        <div class='product-version-block'>
            <div class='product-version-block-value'>
                ����������� 8.
                ���������� ���������            
            </div> 
            <div class='product-version-block-name'>
                7.7�11          
            </div>
        </div> 
        <div class='product-version-block'>
            <div class='product-version-block-value'>
                �����������           
            </div>
            <div class='product-version-block-name'>
                7.7�3.0                      
            </div> 
        </div>
        <div class='product-version-block'>
            <div class='product-version-block-value'>
                �������� � ����������
                ���������� 8          
            </div> 
            <div class='product-version-block-name'>
                7.7�3.0          
            </div>
        </div>
    </div>
    
    <div class='update-1C-list-block'>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                �������� � ����� ���������� ���������� 8 
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                ����������� ���������������� ����������
        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                ���������� �������

        </div>
        <div class='update-1C-list'>
            <div class='update-1C-list-circle'></div>
                ����������� �������
        </div>
    </div>
</div>

<div class="update-1C-block">
    <span class="block-id">
        <?
            $block_id = increase_block_id($block_id);
            echo $block_id;
        ?>
    </span>
    <h2 class="h2">
        ������� ���������� �������������� � 5 �������� ������
    </h2>
    
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
            <div class='update-1C-list-block'>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ��� ���������� ���������� ������� ���� ���������� �����������.
                </div>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ������������ �������� ����������.
                </div>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ��� ��� �������. ������ ���� ����������
                </div>
            </div>
        </div>
            
    </div>
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
            <div class='update-1C-list-block'>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ��� ���������� ���������� ������� ���� ���������� �����������.
                </div>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ������������ �������� ����������.
                </div>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ��� ��� �������. ������ ���� ����������
                </div>
            </div>
        </div>
    </div>
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
            <div class='update-1C-list-block'>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ��� ���������� ���������� ������� ���� ���������� �����������.
                </div>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ������������ �������� ����������.
                </div>
                <div class='update-1C-list'>
                    <div class='update-1C-list-circle'></div>
                        ��� ��� �������. ������ ���� ����������
                </div>
            </div>
        </div>
    </div>
    
    <div class="separation-line">
        <div class="separation-line-cirlce"></div>
        <div class="line"></div>
        
    </div>
        
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>