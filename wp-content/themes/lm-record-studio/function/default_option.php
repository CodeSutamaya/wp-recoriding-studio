<?php
    function design_default_option(){
        wp_enqueue_media();
        wp_css();
        $option_code = "_option_default_option";
        $notif = "Your Setting have been Saved";
        input_ke($option_code,"simpan",$_POST,$notif);
        $arr_doption = focus_to(array($option_code));
        foreach($arr_doption as $index=>$value){
            ${$index} = $value;
        }
                
            $judul = "Default Option";
        ?>
            <center>
                <h1><?php echo $judul; ?></h1>
<form action='' method='POST'>
<table id='wp_table'>

<tr>
    <td>Phone : </td>
    <td colspan="2"><input type="text" name="save_default_phone"  value="<?php echo $save_default_phone; ?>" style='width:450px;' /></td>
</tr>

<tr>
    <td>Email : </td>
    <td colspan="2"><input type="text" name="save_default_email"  value="<?php echo $save_default_email; ?>" style='width:450px;' /></td>
</tr>


<tr>
<td colspan='3'><hr /></td>
</tr>


<tr>
    <td colspan="3">
        <center><h2><big>BANNER</big></h2></center>
    </td>
</tr>

<tr>
    <td>Title : </td>
    <td colspan="2"><input type="text" name="save_banner_title"  value="<?php echo $save_banner_title; ?>" style='width:450px;' /></td>
</tr>

<tr>
    <td>Text : </td>
    <td colspan="2"><input type="text" name="save_banner_text"  value="<?php echo $save_banner_text; ?>" style='width:450px;' /></td>
</tr>

<tr>
    <td class='top'>Summary : </td>
    <td colspan="2">
        <textarea name='save_banner_summary'><?php echo pake_rn($save_banner_summary); ?></textarea>
    </td>
</tr>

<tr>
    <td class='top'>List : </td>
    <td colspan="2">
        <textarea name='save_banner_list'><?php echo pake_rn($save_banner_list); ?></textarea>
    </td>
</tr>

<?php mu_images_view('Image','save_banner_image' , $save_banner_image); ?>


<tr>
<td colspan='3'><hr /></td>
</tr>



<tr>
    <td colspan="3">
        <center><h2><big>CONTENT</big></h2></center>
    </td>
</tr>

<tr>
    <td>Text 1 : </td>
    <td colspan="2"><input type="text" name="save_content_text1"  value="<?php echo $save_content_text1; ?>" style='width:450px;' /></td>
</tr>

<tr>
    <td>Text 2 : </td>
    <td colspan="2"><input type="text" name="save_content_text2"  value="<?php echo $save_content_text2; ?>" style='width:450px;' /></td>
</tr>

<tr>
    <td>Text 3 : </td>
    <td colspan="2"><input type="text" name="save_content_text3"  value="<?php echo $save_content_text3; ?>" style='width:450px;' /></td>
</tr>

<tr>
    <td class='top'>Description : </td>
    <td colspan="2">
        <textarea name='save_content_desc'><?php echo pake_rn($save_content_desc); ?></textarea>
    </td>
</tr>



<tr>
<td colspan='3'><hr /></td>
</tr>

<tr>
    <td colspan="3" class='submit'><input type="submit" class="btn btn-primary btn-md" name='simpan' value="Save"/></td>
</tr>
</table>
</form>
            </center>
        <?php
        c_mu();
    }
?>
