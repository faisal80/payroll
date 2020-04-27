<?php
/* @var $this yii\web\View */
?>
<h1>Payroll of <?= $employee->employee_name ?></h1>

<p>
    <?php
        $sum_of_pays = 0;
        $sum_of_allowances = 0;
        $sum_of_deductions = 0;
    
        foreach($pays as $pay) {
            echo $pay->pay->description . " | " . $pay->amount . "<br>";
            $sum_of_pays += $pay->amount;
        }
        echo '<hr>';
        foreach($allowances as $allowance) {
            echo $allowance->allowance->description . " | " . $allowance->amount . "<br>";
            $sum_of_allowances += $allowance->amount;
        }
        echo '<hr>';
        $gross_pay = $sum_of_pays + $sum_of_allowances;
        echo 'Gross Pay = ' . $gross_pay;
        echo '<hr>';
        foreach($deductions as $deduction) {
            echo $deduction->deduction->description . " | " . $deduction->amount . "<br>";
            $sum_of_deductions += $deduction->amount;
        }
        
        echo '<hr>';
        echo 'Total Deductions = '. $sum_of_deductions;
        echo '<hr>';
        $net_pay = $gross_pay - $sum_of_deductions;
        echo 'Net Pay = ' . $net_pay;
        
    ?>
</p>
