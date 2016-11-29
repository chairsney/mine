<b >
    <?php
    echo $content;
    ?>
    <br>特定的数据块
    <?php
    if(isset($this->blocks['block1']))
        echo $this->blocks['block1'];
    else
        echo '这是默认的数据块内容';
    ?>
</br>