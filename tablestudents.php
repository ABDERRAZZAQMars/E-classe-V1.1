<table class="table">
    <thead>
        <tr style="color: grey;border-bottom: 2px solid gray;">
            <th></th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th class="text-nowrap">Enroll Number</th>
            <th class="text-nowrap">Date of admission</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
           $content = file_get_contents('datastudent.json');
           $students = json_decode($content,true);

            foreach ($students as $value)
            {
                echo 
                    '<tr style="background-color: white;">
                        <td><img src="./Iamges/studentimage.svg" alt=""></td>
                        <td style="vertical-align: middle;">'.$value['name'].'</td>
                        <td style="vertical-align: middle;">'.$value['email'].'</td>
                        <td style="vertical-align: middle;">'.$value['phone'].'</td>
                        <td style="vertical-align: middle;">'.$value['enroll number'].'</td>
                        <td class="text-nowrap" style="vertical-align: middle;">'.$value['date'].'</td>
                        <td style="vertical-align: middle;"><img src="./Icones/modifier.svg" alt=""></td>
                        <td style="vertical-align: middle;"><img src="./Icones/supprimer.svg" alt=""></td>
                    </tr>';
            }
        ?>
    </tbody>
</table>

           
