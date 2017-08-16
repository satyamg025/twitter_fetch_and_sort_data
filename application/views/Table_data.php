<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <table>
            <tr>
                <th>Sno</th>
                <th>Tweet</th>
                <th>Retweet count</th>
            </tr> 

            <?php
                for($i=0;$i<sizeof($tweet_text);$i++){
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $tweet_text[$i];?></td>
                        <td><?php echo $retweet_count[$i];?></td>
                    </tr>
                    <?php
                }
            ?>
        </table>