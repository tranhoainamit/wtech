<div class="binh_luan">
    <h3>Danh sách bình luận</h3>
   
     <div>
         <table>
             <tr>
                 <th></th>
                 <th>Mã bình luận</th>
                 <th>Mã khách hàng</th>
                 <th>Nội dung bình luận</th>
                 <th>Mã hàng hóa</th>     
                 <th></th>
             </tr>
                <?php
             foreach($list_bl as $binh_luan){
            extract($binh_luan);
            $delete__bl = "index.php?act=delete__bl&id=" . $ma_bl;
            echo '
            <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>' . $ma_bl . '</td>
            <td>' . $ma_kh . '</td>
            <td>' . $noi_dung . '</td>
            <td>' . $ma_hh . '</td>
            <td> <a href="' . $delete__bl . '"><input type="button" value="Xoá"></a></td>
            </tr>
            ';
             }
             ?>
       </table>

</div>