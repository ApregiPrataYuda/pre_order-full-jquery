<?php $no = 1;
            if($cart_load->num_rows() > 0) {
                foreach ($cart_load->result() as $c => $data) { ?>
            <tr>
                <td><?=$no++?>.</td>
                <td><?=$data->supplierName?></td>
                <td><?=$data->supplierKode?></td>
                <td class="text-right"><?=$data->supplierEmail?></td>
                <td class="text-center"><?=$data->supplierNotelp?></td>
                <td class="text-right"><?=$data->supplierNohp?></td>
                <td class="text-right" id="total"><?=$data->supplierDescription?></td>
                <td class="text-center" width="160px">
                    <button id="update_cart" data-toggle="modal" data-target="#modal-item-edit"
                        class="btn btn-xs btn-primary">
                        <i class="fa fa-pencil"></i> Update
                        </button>

                        <button id="del_cart" data-cartid="" class="btn btn-xs btn-danger">
                        <i class="fa fa-trash"></i>Delete 
                        </button>
                    </td>
                </tr>
            <?php 
            }
} else {
    echo '<tr>
        <td colspan="8" class="text-center">No item</td>
    </tr>';
} ?>