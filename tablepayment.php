<table class="table table-striped bg-white">
    <thead>
        <tr style="color: grey;border-bottom: 2px solid gray;background-color:#e5e5e570;">
            <th>Name</th>
            <th class="text-nowrap">Payment Schedule</th>
            <th class="text-nowrap">Bill Number</th>
            <th class="text-nowrap">Amount Paid</th>
            <th class="text-nowrap">Balance amount</th>
            <th>Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
       <?php
        $content = file_get_contents('datapayment.json');
        $payment = json_decode($content,true);


        echo'
            <tr class="d-none">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        ';

        foreach ($payment as $value)
        {
            echo'
                <tr>
                    <td style="vertical-align: middle;">'.$value['Name'].'</td>
                    <td style="vertical-align: middle;">'.$value['Payment Schedule'].'</td>
                    <td style="vertical-align: middle;">'.$value['Bill Number'].'</td>
                    <td style="vertical-align: middle;">'.$value['Amount Paid'].'</td>
                    <td style="vertical-align: middle;">'.$value['Balance amount'].'</td>
                    <td class="text-nowrap" style="vertical-align: middle;">'.$value['Date'].'</td>
                    <td style="vertical-align: middle;"><img src="./Icones/view.svg" alt=""></td>
                </tr>
            ';
        }
       ?>
    </tbody>
</table>