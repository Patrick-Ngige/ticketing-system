<?php
                
                global $wpdb;
                $table = $wpdb->prefix.'members';

                $names = $wpdb->get_col("SELECT username FROM $table ");
                ?>

<div
    style="width:50%; display:flex; flex-direction:column; justify-content:center; align-items:center; margin-left: 20em; margin-top:1em;">
    <form method="post"
        style="width:30vw; box-shadow: 2px 2px 2px 2px grey;padding: 2em 3em; line-height: 2em; border-radius: 5px; background-color:#FFFFFF">

        <h1 style="text-align:center;">Create A Ticket</h1>
        <div>
            <label>Ticket Id:</label><br>
            <input type="text" style="width:100%;" placeholder="Enter ticket ID" name="t_id" required>
        </div>

        <div>
            <label>Task: </label><br>
            <input type="text" style="width:100%;" placeholder="Enter task" name="t_task" required><br>

        </div>
        <div>
            <label>Assignee: </label><br>
            
            <select class="form-select" aria-label="Default select example" name="assignee">
                <option selected></option>

               <?php foreach($names as $username){ ?>
                <option ><?php echo $username ?></option>
               <?php }?>
            </select>

        </div>

        <div>
            <label>Date of Issue: </label><br>
            <input type="date" style="width:100%;" placeholder="Choose Date" name="issued_date" required><br>

        </div>

        <button type="submit"
            style="width:100%; background-color:#0071DC; color:white; padding:7px; border-radius: 5px; font-size: 14px; border: none; margin-top:10px;"
            name="submitbtn">Submit</button>
    </form>
</div>