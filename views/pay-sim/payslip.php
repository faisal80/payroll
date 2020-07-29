<?php

/*
    $employee 
    $start_date
    $end_date
    $pays
    $allowances
    $deductions
    $payment_method
*/


$this->title = 'Payslip of '. $employee->employee_name;

$pay_and_allowances_total = 0;
$deductions_total = 0;
$net_payable = 0;

?>

<div class="clearfix">
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" ><img src="../../../images/nim_logo_100x100.jpg" alt="Logo"></div>
    <div class="text-center col-lg-10 col-md-10 col-sm-10 col-xs-10">
        <p class="h2">Government of Pakistan <br>
            National Institute of Management, Peshawar<br>
            <span class="lead label label-info">Payslip for the period from <?= $start_date ?> to <?= $end_date ?> </span>
        </p>
    </div>
    <div class="clearfix"></div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="panel-title">Personal Information</span>
        </div>
        <div class="panel-body">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <dl class="dl-horizontal">
                    <dt>Name of Employee : </dt><dd><?= $employee->employee_name ?></dd>
                    <dt>Father Name : </dt><dd><?= $employee->father_name ?></dd>
                    <dt>NIC Number : </dt><dd><?= $employee->nic ?></dd>
                </dl>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <dl class="dl-horizontal">
                    <dt>Date of Birth : </dt><dd><?= $employee->date_of_birth ?></dd>
                    <dt>Domicile : </dt><dd><?= $employee->domicile ?></dd>
                    <dt>Religion : </dt><dd><?= $employee->religion ?></dd>
                </dl>
            </div>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="panel-title">Pay & Allowances</span>
        </div>
        <!-- <div class="panel-body"> -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-info"> 
                        <th>Description</th><th class="text-right">Amount</th><th>Description</th><th class="text-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    for ($i=0; $i< count($pays) ; $i++) {
                        if ($i % 1) echo '<tr>';
                        echo '<td>' . $pays[$i]->pay->description .'</td><td align="right">' .  Yii::$app->formatter->asDecimal($pays[$i]->amount) . '</td>';
                        $pay_and_allowances_total += $pays[$i]->amount;
                        if ($i % 2) echo '</tr>';
                    } 

                    for ($i=0; $i< count($allowances) ; $i++) {
                        if ($i % 1) echo '<tr>';
                        echo '<td>' . $allowances[$i]->allowance->description .'</td><td align="right">'. Yii::$app->formatter->asDecimal($allowances[$i]->amount) . '</td>';
                        $pay_and_allowances_total += $allowances[$i]->amount;
                        if ($i%2) echo '</tr>';
                    } 
                    ?>
                </tbody>
            </table>
        <!-- </div> -->
        <div class="panel-footer panel-primary text-right">
            <strong> Total Pay and Allowances Rs. <?= Yii::$app->formatter->asDecimal($pay_and_allowances_total) ?></strong>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <span class="panel-title">Deductions</span>
        </div>
        <!-- <div class="panel-body"> -->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-info"> 
                        <th>Description</th><th class="text-right">Amount</th><th>Description</th><th class="text-right">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    for ($i=0; $i< count($deductions) ; $i++) {
                        if ($i % 1) echo '<tr>';
                        echo '<td>' . $deductions[$i]->deduction->description .'</td><td align="right">'. Yii::$app->formatter->asDecimal($deductions[$i]->amount) . '</td>';
                        $deductions_total += $deductions[$i]->amount;
                        if ($i % 2) echo '</tr>';
                    } 
                    ?>
                </tbody>
            </table>
        <!-- </div> -->
        <div class="panel-footer panel-primary text-right">
            <strong> Total Deductions Rs. <?= Yii::$app->formatter->asDecimal($deductions_total) ?></strong>
        </div>
    </div>
    <div class="well well-sm text-right">
        <?php $net_payable = $pay_and_allowances_total - $deductions_total ?>
        <strong>Net Amount Payable Rs. <?= Yii::$app->formatter->asDecimal($net_payable) ?> </strong>
    </div>
    <address>
    Payment option : <?= $payment_method->through ?> <br>
    Account Number : <?= $payment_method->account_number ?> <br>
    Bank Details : <?= $payment_method->bank ?> <br>
    <address>

</div>
<?= $employee->id ?>