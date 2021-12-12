<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
						
						<?php

						$masVaiues = [

                                 [
                                     'dFlex' => 'd-flex mt-2',
                                     'value' => 'My Tasks',
                                     'dInline' => 'd-inline-block ml-auto',
                                     'value2' => '130 / 500',
                                     'progress' => 'progress progress-sm mb-3',
                                     'progressBar' => 'progress-bar bg-fusion-400',
                                     'role' => 'progressbar',
                                     'style' => 'width: 65%;',
                                     'ariaValuenow' => '65',
                                     'ariaValuemin' => '0',
                                     'ariaValuemax' => '100'

                                 ],

                                 [
                                     'dFlex' => 'd-flex',
                                     'value' => 'Transfered',
                                     'dInline' => 'd-inline-block ml-auto',
                                     'value2' => '440 TB',
                                     'progress' => 'progress progress-sm mb-3',
                                     'progressBar' => 'progress-bar bg-success-500',
                                     'role' => 'progressbar',
                                     'style' => 'width: 34%;',
                                     'ariaValuenow' => '34',
                                     'ariaValuemin' => '0',
                                     'ariaValuemax' => '100'

                                 ],

                                 [
                                     'dFlex' => 'd-flex',
                                     'value' => 'Bugs Squashed',
                                     'dInline' => 'd-inline-block ml-auto',
                                     'value2' => '77%',
                                     'progress' => 'progress progress-sm mb-3',
                                     'progressBar' => 'progress-bar bg-info-400',
                                     'role' => 'progressbar',
                                     'style' => 'width: 77%;',
                                     'ariaValuenow' => '77',
                                     'ariaValuemin' => '0',
                                     'ariaValuemax' => '100'

                                 ],

                                 [
                                     'dFlex' => 'd-flex',
                                     'value' => 'User Testing',
                                     'dInline' => 'd-inline-block ml-auto',
                                     'value2' => '7 days',
                                     'progress' => 'progress progress-sm mb-g',
                                     'progressBar' => 'progress-bar bg-primary-300',
                                     'role' => 'progressbar',
                                     'style' => 'width: 84%;',
                                     'ariaValuenow' => '84',
                                     'ariaValuemin' => '0',
                                     'ariaValuemax' => '100'

                                 ]


                          ]
						?>
						
						
						
						<?php foreach($masVaiues as $masVaiue):?>

						<div class="<?php echo $masVaiue['dFlex'] ?>">
							<?php echo $masVaiue['value'] ?>
							<span class="<?php echo $masVaiue['dInline'] ?>"><?php echo $masVaiue['value2'] ?></span>
							</div>
                          <div class="<?php echo $masVaiue['progress'] ?>">
                         <div class="<?php echo $masVaiue['progressBar'] ?>" role="<?php echo $masVaiue['role'] ?>" style="<?php echo $masVaiue['style'] ?>" aria-valuenow="<?php echo $masVaiue['ariaValuenow'] ?>" aria-valuemin="<?php echo $masVaiue['ariaValuemin'] ?>" aria-valuemax="<?php echo $masVaiue['ariaValuemax'] ?>"></div>
                         </div>
						 <?php endforeach; ?>	


                            
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
