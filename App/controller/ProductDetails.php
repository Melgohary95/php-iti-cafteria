<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/Order.php';
if (isset($_GET['id'])) {
    $model = new Order();
 $values = json_decode($_GET['value'], true);

        if (!empty($values)) {
            foreach ($values as $value) {
                $id = preg_replace("/[^0-9,.]/", "", $value);
                $ids[] = $id;
            }
//            var_dump($_GET['id']);
//            var_dump($ids);
//            var_dump(in_array($_GET['id'],$ids));
//            
            if (!in_array($_GET['id'], $ids))
            {
                $result = $model->getProductDetails($_GET['id']);
            }
        } else {
            $result = $model->getProductDetails($_GET['id']);
        }
}
?>
 <?php if (isset($result)): ?>
<tr>
    <td>
        <span class="sname" id="name_1508596137009">  <?php echo $result['name'] ?> </span>
    </td>
    <td>
        <span class="text-right sprice" id="sprice_1508596137009"> <?php echo $result['price'] ?></span>
    </td>
     <td class="quantity-section">
        <span class="plus"> + </span>
        <input class="form-control input-qty kb-pad text-center quantity" name="quantity[<?php echo $result['id'] ?>]" type="text" value="1" >
        <span class="minus"> - </span>
    </td>
    <td >
        <span class="text-right ssubtotal" >0</span>
    </td>
    <td>
        <i class="fa fa-trash-o tip pointer posdel remove" id="1508596137009" title="Remove"></i>
    </td>
</tr>
 <?php endif; ?>
