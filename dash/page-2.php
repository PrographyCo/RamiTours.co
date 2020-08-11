<div class="col-1  mr-1 ">
        <div class="  l-sidebar  h-100 " style="background-color: #FAFBFC">

            <div class="l-sidebar__content  ">
                <nav class="c-menu js-menu"  >
                    <ul class="u-list list-unstyled ">
                        <a href="">
                            <li class="c-menu__item " data-toggle="tooltip" title="Dashboard" >

                                <div class="  c-menu__item__inner d-flex justify-content-center">

                                </div>
                            </li>

                        </a>

                        <a href="?page=2&i=1">
                            <li class="c-menu__item nav-item <?= ($i == 1)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="First Image" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/order.svg"  alt="First Image" style="filter: <?= ($i == 1)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>
                        
                                                <a href="?page=2&i=2">
                            <li class="c-menu__item nav-item <?= ($i == 2)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Second Image" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/order.svg"  alt="Second Image" style="filter: <?= ($i == 2)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>
                        
                                                <a href="?page=2&i=3">
                            <li class="c-menu__item nav-item <?= ($i == 3)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Third Image" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/order.svg"  alt="Third Image" style="filter: <?= ($i == 3)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>
                        
                                                <a href="?page=2&i=4">
                            <li class="c-menu__item nav-item <?= ($i == 4)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Forth Image" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/order.svg"  alt="Forth Image" style="filter: <?= ($i == 4)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>
                        
                                                <a href="?page=2&i=5">
                            <li class="c-menu__item nav-item <?= ($i == 5)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Fifth Image" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/order.svg"  alt="Fifth Image" style="filter: <?= ($i == 5)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>

                        <a href="?page=2&i=6">
                            <li class="c-menu__item nav-item <?= ($i == 6)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="Messages" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/mass.svg"  alt="Messages" style="filter: <?= ($i == 6)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>

                        <a href="?page=2&i=7">
                            <li class="c-menu__item has-submenu nav-item <?= ($i == 7)?  'is-active' : '' ; ?>" data-toggle="tooltip" title="replyed" >
                                <div class="c-menu__item__inner d-flex justify-content-center">
                                    <img src="assets/images/repl.svg"  alt="replyed" style="filter: <?= ($i == 7)?  'contrast(1)' : 'contrast(0)' ; ?>">
                                </div>
                            </li>
                        </a>

                    </ul>
                </nav>
              </div>
              </div>
    </div>
    <div class="col pr-2  ml-4 " style="padding-top: 5% ;">
        <h3 class="mt-3 pb-0 mb-0"> Comments</h3>
        <hr class="mt-0">
        <div class="containerr p-2" >
            <div class="col-auto  mx-auto mr-1  "  style="border:1px solid #E1E1E2;border-radius: 8px">

                <table class="table" >

                    <tbody class="mx-auto">
                    <?php
                    $table = 'comments';
                    $mass = 'Comment';
                    $mass2 = 'comment';
                    $limit = (($m - 1 ) * 9) ;

                    $where = ($i < 6)? 'img = "'.$i.'"': (($i == 6)? 'repl != "y" AND img = ""':'repl = "y" AND img = ""');
                    $msg123 = ($i == 6)? '<td scope="col" class="text-primary font-weight-bold">'.$repl.'</td>
                    <td scope="col-3 bg-white " class="btn-replay" >
                            <button type="button" class="btn btn-light col-12 bg-white  shadow-sm" name="'.$x.'" value="'.$row['id'].'">
                                <a href="#">Replay</a></button>

                        </td>':'';

                    $comd = sel($table,$where.' ORDER BY id DESC limit '.$limit.',9');

                    $n = ((count(sel($table,$where.' ORDER BY id DESC')) % 9) == 0)? 0 : 1;
                    $pages = intdiv(count(sel($table,$where.' ORDER BY id DESC')) , 9) + $n;

                    if ($m != 1){ $prev = $m-1; }else{ $prev = 1; $pclass= 'disabled'; }
                    if ($m == $pages){$nclass= 'disabled'; }
                    $next = $m+1;

                    $x = 1;

                        foreach ($comd as $row)
                        {
                            $user = sel('users','id = "'.$row['userId'].'"');
                            $checked2 = ($row['star'] !== 'y')? '' : 'checked';
                            $repl = ($row['repl'] == 'y')? 'Replayed':'Not Yet Replayed';

                            echo '
                    <tr >

                        <td scope="col" class="text-primary font-weight-bold"> Name</td>
                        <td scope="col">'.$user[0]['name'].'</td>
                        <td scope="col" class="text-primary font-weight-bold">'.$mass.'</td>
                        <td scope="col" style="word-break: break-word;width: 30%;" >'.$row[$mass2].'</td>
                        <td scope="col" class="text-primary font-weight-bold">Email</td>
                        <td scope="col" class="email_'.$x.'">'.$user[0]['email'].'</td>
                        <td scope="col-3"  title="Do You Want To Show This In The Photo Page" data-toggle="tooltip"><input type="checkbox" onchange="return ign('.$row['id'].')" '.$checked2.' id="check'.$row['id'].'" /></td>
                        '.$msg123.'
                    </tr>';

                            $x++;
                        }
                    ?>
                    </tbody>
                </table>

                </div>


            </div>

        <div class="counter">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item mx-1 <?= (isset($pclass))? $pclass : ''; ?>"><a class="page-link" href="<?= '?page='.$page.'&i='.$i.'&m='.$prev; ?>" <?= (isset($pclass))? 'tabindex="-1"':''; ?>><i class="fas fa-arrow-left "></i></a></li>
                <li class="page-item mx-1"><a class="page-link <?= ($m == 1)? 'is-active-li':''; ?>" href="<?= '?page='.$page.'&i='.$i.'&m=1'; ?>">1</a></li>
                <li class="page-item mx-1"><a class="page-link <?= ($m == 2)? 'is-active-li':''; ?>" href="<?= '?page='.$page.'&i='.$i.'&m=2'; ?>">2</a></li>
                <li class="page-item mx-1"><a class="page-link <?= ($m == 3)? 'is-active-li':''; ?>" href="<?= '?page='.$page.'&i='.$i.'&m=3'; ?>">3</a></li>
                <li class="page-item mx-1 <?= (isset($nclass))? $nclass : ''; ?>"><a class="page-link" href="<?= '?page='.$page.'&i='.$i.'&m='.$next; ?>" <?= (isset($nclass))? 'tabindex="-1"':''; ?>><i class="fas fa-arrow-right "></i></a></li>
            </ul>
        </nav>
        </div>
        </div>


    <form action="?data=2" method="post" style="z-index:8;" class="btn-replay" enctype="multipart/form-data">
                <div class="replay bg-white d-flex mx-auto justify-content-center align-content-center flex-column p-4 mb-2 shadow-lg" style="border-radius: 10px" >
        <div class=" p-1" style="background-color: #F7F8F9; border-radius: 4px">
            <textarea name="reply" class="w-100 bg-transparent border-0 " id="" cols="" rows="8" placeholder="Write Your Reply Here" required></textarea>
            <input type="hidden" name="email" value="" />
            <input type="hidden" name="i" value="<?= $i; ?>" />
            <input type="hidden" name="id" value="" />
        </div>
    <div class="  d-flex justify-content-center mt-1 w-100   btn-blue shadow-sm mt-1 ">
        <input type="submit" class="  w-100 btn btn-light  text-white bg-primary" value="Replay">
    </div>
</div>
    </form>