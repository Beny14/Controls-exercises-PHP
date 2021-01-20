<!-- ................ 1 ............. -->
<?php
    // $sir = array(
    //     "romania"=>"bucuresti",
    //     "franta"=>"paris",
    //     "anglia"=>"londra",
    //     "spania"=>"madrid",
    //     "germania"=>"berlin"
    // );

    // function option($sir, $selectie){
    //     echo "<select>";
    //         foreach($sir as $stat => $oras){
    //             echo "<option ";
    //             if ($oras == $selectie)
    //                 echo "selected=\"selected\"";
    //                 echo "value=\"" . $oras . "\">";
    //                 echo $stat . "</option>";
    //         }
    //     echo "</select>";
    // }

    // option($sir, "madrid");
    
?>
<!-- ................ 2 ............. -->
    <!-- $sir = array(
        "romania"=>"bucuresti",
        "franta"=>"paris",
        "anglia"=>"londra",
        "spania"=>"madrid",
        "germania"=>"berlin"
    ); -->

<!-- <select>
    <?php
        foreach($sir as $stat => $oras){ ?>
            <option value="<?php echo $oras; ?>">
                <?php echo $stat; ?>
            </option>
        <?php
            }
        ?>
</select> -->
<!-- ................ 3 ............. -->
<!--  putem crea şi propriul nostru control grid: -->

<?php
    $sir = array(
        "romania"=>"bucuresti",
        "franta"=>"paris",
        "anglia"=>"londra",
        "spania"=>"madrid",
        "germania"=>"berlin"
    );
?>

    <table width="100%" height="10" border="" cellpadding="20" cellspacing="10">
    <?php
        $numarator = 0;
        foreach($sir as $stat => $oras){
    ?>
        <tr 
            <?php 
                if($numarator%2 == 0){
                    echo "style=\"background-color:#D7F7FF;\"";
                }else{
                    echo "style=\"background-color:#9BD7FF;\""; 
                }
            ?>
        >
        <td valign="top"><?php echo $stat; ?></td>
        <td valign="top"><?php echo $oras; ?></td>
        </tr>
    <?php
        $numarator++;
    }
?>
    </table>

