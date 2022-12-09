<?php

// Load values and assign defaults.
$title =  'Connect easily. Collaborate efficiently.';
$description =  'Rather than do things the typical way, we’ve created a membership-based primary care practice truly designed around your needs.';
$table_detail_title =  'Good Morning, Ian Hugen.'
?>

<!-- CONNECT EASILY SECTION -->
<section class="container lg:px-16">
    <div class="flex text-center gap-y-7 gap-x-5 flex-col mb-6 md:text-left md:pr-48 xl:pr-0 xl:items-center xl:flex-row">
        <h2 class="xl:whitespace-nowrap"><?php echo $title; ?></h2>
        <p><?php echo $description; ?></p>
    </div>

    <div class="flex gap-y-9 flex-col-reverse xl:flex-col ">


        <div class="shadow-lg bg-white rounded overflow-hidden text-[10px] pb-5 min-w-[688px]">
            <div class="bg-[rgba(21,101,216,0.1)] h-8 flex gap-x-2 items-center pl-3">
                <div class="w-[6px] h-[6px] rounded-full bg-[#E95432]"></div>
                <div class="w-[6px] h-[6px] rounded-full bg-white"></div>
                <div class="w-[6px] h-[6px] rounded-full bg-secondary"></div>
            </div>
            <div class="pt-8 grid grid-cols-[1fr_4fr]">
                <div class="pl-[14px] grid gap-y-4">
                    <a class="cursor-pointer text-primary font-bold py-2 flex gap-x-2"><i class="ri-home-4-fill"></i> Dashboard</a>
                    <div>
                        <h5 class="text-[#63798B] mb-3">ADMIN</h5>
                        <ul>
                            <li>
                                <a href="#" class="py-2 flex gap-x-2">
                                    <i class="ri-user-line"></i>
                                    User List
                                </a>
                            </li>
                            <li class="py-2 flex gap-x-2">
                                <a href="#" class="py-2 flex gap-x-2">
                                    <i class="ri-earth-line"></i> Site List
                                </a>
                            </li>
                            <li class="py-2 flex gap-x-2">
                                <a href="#" class="py-2 flex gap-x-2">
                                    <i class="ri-bar-chart-grouped-line"></i> Trial List
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="text-[#63798B] mb-3">PATIENT</h5>
                        <ul>
                            <li class="py-2 flex gap-x-2">
                                <a href="#" class="py-2 flex gap-x-2">
                                    <i class="ri-file-user-line"></i>Patients
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h5 class="text-[#63798B] mb-3">ADDITIONAL</h5>
                        <ul>
                            <li class="py-2 flex gap-x-2">
                                <a href="#" class="py-2 flex gap-x-2">
                                    <i class="ri-folder-chart-line"></i>Report
                                </a>

                            </li>
                            <li class="py-2 flex gap-x-2">
                                <a href="#" class="py-2 flex gap-x-2">
                                    <i class="ri-settings-5-line"></i> Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <header class="border-b border-solid border-border-base-color">
                        <div class="flex justify-between items-center pl-6 pb-7 pr-7">
                            <h5 class="text-base">
                                <?php echo $table_detail_title; ?>
                            </h5>
                            <button class=" bg-secondary text-white rounded-lg font-bold grid place-items-center w-9 aspect-square"> <span>+</span></button>
                        </div>
                    </header>

                    <div class="grid pl-6 grid-cols-2 gap-x-6">
                        <div class="border-r border-solid border-border-base-color pt-5">
                            <h3 class="font-bold mb-4">New Patients (5)</h3>
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="text-[#B3BAC5] text-left">
                                        <th>#</th>
                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>DATE SUBMIT</th>
                                    </tr>
                                </thead>
                                <?php if (have_rows('table_detail')) : ?>
                                    <tbody>
                                        <?php
                                        while (have_rows('table_detail')) : {
                                                the_row();
                                            }
                                            $column_1 = get_sub_field('column_1') ?: "Col 1";
                                            $column_2 = get_sub_field('column_2') ?: "Col 2";
                                            $column_3 = get_sub_field('column_3') ?: "Col 3"
                                        ?>
                                            <tr class="border-b border-solid border-border-base-color align-middle">
                                                <td class="pb-[10px] pt-4"><input type="checkbox" name="" id="" class="!w-[10px]"></td>
                                                <td class="pb-[10px] pt-4"><?php echo $column_1 ?></td>
                                                <td class="pb-[10px] pt-4"><?php echo $column_2 ?></td>
                                                <td class="pb-[10px] pt-4"><?php echo $column_3 ?></td>
                                            </tr>
                                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <!-- <tbody>
                        <tr class="border-b border-solid border-border-base-color align-middle">
                            <td class="pb-[10px] pt-4"><input type="checkbox" name="" id="" class="!w-[10px]"></td>
                            <td class="pb-[10px] pt-4">P14</td>
                            <td class="pb-[10px] pt-4">Jacqueline Asong</td>
                            <td class="pb-[10px] pt-4">23/01/2020</td>
                        </tr>

                        <tr class="border-b border-solid border-border-base-color align-middle">
                            <td class="pb-[10px] pt-4"><input type="checkbox" name="" id="" class="!w-[10px]"></td>
                            <td class="pb-[10px] pt-4">P21</td>
                            <td class="pb-[10px] pt-4">Debashis Bhuiyan</td>
                            <td class="pb-[10px] pt-4">23/01/2020</td>
                        </tr>

                        <tr class="border-b border-solid border-border-base-color align-middle">
                            <td class="pb-[10px] pt-4"><input type="checkbox" name="" id="" class="!w-[10px]"></td>
                            <td class="pb-[10px] pt-4">P98</td>
                            <td class="pb-[10px] pt-4">Hector Mariano</td>
                            <td class="pb-[10px] pt-4">23/01/2020</td>
                        </tr>

                        <tr class="border-b border-solid border-border-base-color align-middle">
                            <td class="pb-[10px] pt-4"><input type="checkbox" name="" id="" class="!w-[10px]"></td>
                            <td class="pb-[10px] pt-4">P09</td>
                            <td class="pb-[10px] pt-4">Oluchi Mazi</td>
                            <td class="pb-[10px] pt-4">23/01/2020</td>
                        </tr>

                        <tr class="border-b border-solid border-border-base-color align-middle">
                            <td class="pb-[10px] pt-4"><input type="checkbox" name="" id="" class="!w-[10px]"></td>
                            <td class="pb-[10px] pt-4">P52</td>
                            <td class="pb-[10px] pt-4">Shadrias Pearson</td>
                            <td class="pb-[10px] pt-4">23/01/2020</td>
                        </tr>
                    </tbody> -->
                    </table>
                    </div>

                    <div class="pt-5">
                        <h3 class="font-bold mb-7">The Sites (4)</h3>
                        <?php if (have_rows('sites')) : ?>
                            <div class="grid gap-y-7">
                                <?php
                                $index = 0;
                                while (have_rows('sites')) : {
                                        $index++;
                                        the_row();
                                    }
                                    $name = get_sub_field('name') ?: "Default name here";
                                    $location = get_sub_field('location') ?: "Default location here ...";
                                    $image = get_sub_field('image') ?: "/wp-content/themes/wtsd/assets/images/dashboard-icon-$index.png"
                                ?>
                                    <div class="flex items-center gap-x-4">
                                        <div class="shadow-lg p-2 w-8 aspect-square rounded">
                                            <img src="<?php echo $image  ?>" alt="" class="w-full object-cover">
                                        </div>

                                        <div>
                                            <strong><?php echo $name ?></strong>
                                            <p class="text-[#959EAD]"><?php echo $location ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        <!-- <div class="grid gap-y-7">
                                <div class="flex items-center gap-x-4">
                                    <div class="shadow-lg p-2 w-8 aspect-square rounded">
                                        <img src="/wp-content/themes/wtsd/assets/images/dashboard-icon-1.png" alt="" class="w-full object-cover">
                                    </div>

                                    <div>
                                        <strong>Bayfront Health St. Petersburg</strong>
                                        <p class="text-[#959EAD]">New York, US</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="shadow-lg p-2 w-8 aspect-square rounded">
                                        <img src="/wp-content/themes/wtsd/assets/images/dashboard-icon-2.png" alt="" class="w-full object-cover">
                                    </div>

                                    <div>
                                        <strong>Cape Coral Hospital</strong>
                                        <p class="text-[#959EAD]">Florida, US</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="shadow-lg p-2 w-8 aspect-square rounded">
                                        <img src="/wp-content/themes/wtsd/assets/images/dashboard-icon-3.png" alt="" class="w-full object-cover">
                                    </div>

                                    <div>
                                        <strong>Ed Fraser Memorial Hospital</strong>
                                        <p class="text-[#959EAD]">New York, US</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-x-4">
                                    <div class="shadow-lg p-2 w-8 aspect-square rounded">
                                        <img src="/wp-content/themes/wtsd/assets/images/dashboard-icon-4.png" alt="" class="w-full object-cover">
                                    </div>

                                    <div>
                                        <strong>Kendall Regional Medical Center</strong>
                                        <p class="text-[#959EAD]">Miami, US</p>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (have_rows('card')) : ?>
        <div class="grid md:grid-cols-3 gap-x-5 gap-y-3 mb-9">
            <?php
            while (have_rows('card')) : {
                    the_row();
                }
                $number = get_sub_field('number') ?: "Default number here";
                $title = get_sub_field('title') ?: "Default title here ...";
                $description = get_sub_field('description') ?: "Default description here ..."
            ?>
                <div class="p-5 border border-solid border-[#B3BAC5] rounded-lg">
                    <h2 class="mb-4 font-bold text-2xl text-primary"><?php echo $number ?></h2>
                    <h2 class="mb-2 text-base font-semibold"><?php echo $title ?></h2>
                    <p><?php echo $description ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>

</section>
<!-- END CONNECT EASILY SECTION -->