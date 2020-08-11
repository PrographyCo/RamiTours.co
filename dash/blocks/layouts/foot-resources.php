<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"> </script>
<script src="assets/js/swiper.min.js"> </script>


<script>

    $(document).ready(function () {



        // toggle menu responsive

        $(' body  .btn1 button  ').on('click', function () {
            $('body').toggleClass('square-active');
            document.querySelector('input[name="name"]').value = document.querySelector('#name_'+this.name).innerText;
            document.querySelector('input[name="details"]').value = document.querySelector('#detail_'+this.name).innerText;
            document.querySelector('input[name="id"]').value = this.name;
            document.querySelector('input[name="src"]').value = '..'+document.querySelector('input[name="imgSrc_'+this.name+'"]').value;
            document.querySelector('#dest_img').src = '..'+document.querySelector('input[name="imgSrc_'+this.name+'"]').value;
        });

        $('.edit').on('click', function () {
            $('body').toggleClass('square-active');
            document.querySelector('input[name="id"]').value = this.name;
            document.querySelector('input[name="src"]').value = '..'+document.querySelector('input[name="imgSrc_'+this.name+'"]').value;
            document.querySelector('#dest_img').src = '..'+document.querySelector('input[name="imgSrc_'+this.name+'"]').value;
        });

        $(' body  .btn-replay button  ').on('click', function () {
            $('body').toggleClass('replay-active');

            document.querySelector('input[name="email"]').value = document.querySelector('.email_'+this.name).innerText;
            document.querySelector('input[name="id"]').value = this.value;
            document.querySelector('form').style = 'position: fixed;\n' +
                '    top: 0;\n' +
                '    left: 0;\n' +
                '    width: 100%;\n' +
                '    height: 100%;\n' +
                '    backdrop-filter: blur(5px);\n' +
                '    z-index: 12;';
        });
        $(' body  .btn-clients button  ').on('click', function () {
            $('body').toggleClass('square-clients-active');
            document.querySelector('input[name="name"]').value = document.querySelector('#name_'+this.name).innerText;
            document.querySelector('input[name="id"]').value = this.name;
            document.querySelector('input[name="password"]').value = document.querySelector('#pass_'+this.name).innerHTML;
        });


        document.onkeydown = function (e) {
            if (e.key == 'Escape')
            {
                if (document.querySelector("#msg").style.display == "grid"){
                    document.querySelector("#msg").style.display = "none";
                }

                $('body').removeClass('square-active square-clients-active replay-active');

                document.querySelector('form').style = '';

                if(document.querySelector('.add').style.display == 'grid'){
                    document.querySelector('.add').style.display = 'none';
                }
                document.querySelector('input[name="email"]').value = '';
            }
        }






        var Dashboard = function () {
            var global = {
                tooltipOptions: {
                    placement: "right"
                },
                menuClass: ".c-menu"
            };

            // var menuChangeActive = function menuChangeActive(el) {
            //     var hasSubmenu = $(el).hasClass("has-submenu");
            //     $(global.menuClass + " .is-active").removeClass("is-active");
            //     $(el).addClass("is-active");

                // if (hasSubmenu) {
                // 	$(el).find("ul").slideDown();
                // }
            // };

            var sidebarChangeWidth = function sidebarChangeWidth() {
                var $menuItemsTitle = $("li .menu-item__title");

                $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
                $(".hamburger-toggle").toggleClass("is-opened");

                if ($("body").hasClass("sidebar-is-expanded")) {
                    $('[data-toggle="tooltip"]').tooltip("destroy");
                } else {
                    $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
                }
            };

            return {
                init: function init() {
                    $(".js-hamburger").on("click", sidebarChangeWidth);

                    $(".js-menu li").on("click", function (e) {
                        menuChangeActive(e.currentTarget);
                    });

                    $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
                }
            };
        }();

        Dashboard.init();




    });

<?php
    if ($msg != ''){
        echo '
            document.querySelector("body").onload = function() {
                document.querySelector("#msg").style.display = "grid";
            }
        ';
    }
?>



    function Add() {
        document.querySelector('.add').style.display = 'grid';
    }

  document.querySelector('#search').onkeydown = function (e) {
        if (e.key == 'Enter'){
            let search = document.querySelector('#search').value;

            window.location.href = '?page=6&search='+search;
        }
    }
    
    function Add() {
        document.querySelector('.add').style.display = 'grid';
    }

    document.querySelector('#search').onkeydown = function (e) {
        if (e.key == 'Enter'){
            let search = document.querySelector('#search').value;

            window.location.href = '?page=6&search='+search;
        }
    }

<?php
    echo "img = $i";
?>

    function ign(i) {
        let checked = document.querySelector('#check'+i).checked;

        let data = new XMLHttpRequest();
        data.open('POST','php/ign.php',true);
        data.setRequestHeader(
            "Content-Type" ,
            "application/x-www-form-urlencoded"
        );


        let send = "n";

        if (checked){
            send = "y";
        }
        data.send('ign='+send+'&id='+i+'&img='+img);
        data.onreadystatechange = function () {
            if (this.status === 200 && this.readyState === 4){
                console.log(this.responseText);
                window.location.href = '?page=2&i='+img+'&msg='+this.responseText;
            }
        }
    }

    function ign2(i) {
        let checked = document.querySelector('#check2_'+i).checked;
        let send = "n";

        let data = new XMLHttpRequest();
        data.open('POST','php/ign2.php',true);
        data.setRequestHeader(
            "Content-Type" ,
            "application/x-www-form-urlencoded"
        );

        if (checked){
            send = "y";
        }

        data.send('ign='+send+'&id='+i);
        data.onreadystatechange = function () {
            if (this.status === 200 && this.readyState === 4){
                console.log(this.responseText);
                window.location.href = '?page=4&msg='+this.responseText;
            }
        }
    }
    
    function ignore(i){
        let checked = document.querySelector('#check3_'+i).checked;
        let send = "n";

        let data = new XMLHttpRequest();
        data.open('POST','php/ignore.php',true);
        data.setRequestHeader(
            "Content-Type" ,
            "application/x-www-form-urlencoded"
        );

        if (checked){
            send = "y";
        }

        data.send('ign='+send+'&id='+i);
        data.onreadystatechange = function () {
            if (this.status === 200 && this.readyState === 4){
                console.log(this.responseText);
                window.location.href = '?page=4&msg='+this.responseText;
            }
        }
    }
    
    function session(){
        let data = new XMLHttpRequest();
        data.open('POST','?',true);
        data.setRequestHeader(
            "Content-Type" ,
            "application/x-www-form-urlencoded"
        );

        data.send();
        data.onreadystatechange = function () {
            if (this.status === 200 && this.readyState === 4){
                //console.log(this.responseText);
                window.location.href = '?data=15';
            }
        }
    }
</script>
