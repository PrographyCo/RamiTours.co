    <div class="col pr-2  ml-4 " style="padding-top: 5% ;">
<?php
    include 'php/dash.php';
?>
        <h3 class="mt-3 pb-0 mb-0"> Dashboard</h3>
        <hr class="mt-0">
        <div class="containerr p-2" >

            <div class="row p-3 " >
                <div class="col-auto col-md-6 col-lg col-xl mx-auto mb-1  mr-md-1 " style="border: 1px solid #E1E1E2">
                    <h6 class="font-weight-bold pt-2 mb-0"><?= countDays(7,'visitors'); ?></h6>
                    <span class="text-muted">Visitors for this week</span>

                    <div class="" >

                        <svg  width="251.341" height="98.371" viewBox="0 0 381.341 98.371" class="svgImg">
                            <defs>
                                <filter id="Path_45" x="0" y="0" width="381.341" height="98.371" filterUnits="userSpaceOnUse">
                                    <feOffset dy="10" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="2.5" result="blur"/>
                                    <feFlood flood-opacity="0.161"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                </filter>
                            </defs>
                            <g filter="url(#Path_45)">
                                <path d="M10,60 <?php echo $two->vals; ?>" fill="none" stroke="#15bd28" stroke-linecap="round" stroke-width="4"/>
                            </g>
                        </svg>


                    </div>
                </div>

            <div class="row   mx-auto">
                <div class="col-auto col-md col-xl mx-auto mr-lg-1  mb-1" style="border: 1px solid #E1E1E2">
                    <h6 class="font-weight-bold  pt-1 mb-5">Users</h6>
                    <h4 class="font-weight-bold  mb-0"><?= count(sel('users','1=1'));  ?></h4>
                    <span class="text-muted">Total users for this Year</span>
                </div>

                <div class="col-auto  col-md-6 col-lg col-xl mx-auto mb-1  mr-md-1" style="border: 1px solid #E1E1E2">
                    <h6 class="font-weight-bold pt-2 mb-0"><?= count(sel('visitors','elink="y"')) ?></h6>
                    <span class="text-muted">Visitors from external links</span>
                </div>
            </div>

        </div>

    </div>