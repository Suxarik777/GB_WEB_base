
<!--сформировать массив с данными для блока «Опыт работы».-->
<!--Вывести данные массива в HTML-шаблоне.-->

<?php

$job = [
    'work' => ['GB', 'VK', 'Яндекс'],
    'date' => ['2020 - по настоящее время', '2015-2020', '2000-2015'],
    'comment' => ['Учёба', 'Работа', 'Работа, учеба, работа']
]
?>

<div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i
            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['work'][0]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['date'][0]; ?>
        </h6>
        <p>
            <?php echo $job['comment'][0]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['work'][1]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['date'][1]; ?>
        </h6>
        <p>
            <?php echo $job['comment'][1]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
                <?php echo $job['work'][2]; ?>
            </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['date'][2]; ?>
        </h6>
        <p>
            <?php echo $job['comment'][2]; ?>
        </p><br>
    </div>
</div>
