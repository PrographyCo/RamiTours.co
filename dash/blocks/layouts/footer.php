<div id="msg" style="position:fixed; top:0; left: 0; height: 100%; width: 100%; backdrop-filter: blur(5px); display: none; z-index: 99; ">
    <div style="    position: fixed;
    top: 37.5%;
    left: 35%;
    width: 30%;
    height: 25%;
    background: white;
    border-radius: 8px;
    display: grid;
    justify-content: center;
    align-items: center;">
        <?php
        $msgs = explode('<br />',$msg);
        foreach ($msgs as $ms)
            {
                echo $ms.'<br />';
            }
        ?>
    </div>
</div>