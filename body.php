<?php 
include 'db.php';
?>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1061.67 515.83">
            <path class="cls-1" d="M8.75-1.13H1050.06c5.36,0,9.71,2.94,9.71,6.57V507.18c0,3.63-4.35,6.57-9.71,6.57H8.75c-5.36,0-9.71-2.94-9.71-6.57V5.44C-1,1.81,3.39-1.13,8.75-1.13Z" transform="translate(1.43 1.6)"/>
            <path class="cls-2" d="M488.28,174.63h18.44c4.11,0,7.44,1.9,7.44,4.25V498c0,2.35-3.33,4.26-7.44,4.26H488.28c-4.11,0-7.45-1.91-7.45-4.26V178.88C480.83,176.53,484.17,174.63,488.28,174.63Z" transform="translate(1.43 1.6)"/>
            <path class="cls-2" d="M488.28,174.63h18.44c4.11,0,7.44,1.9,7.44,4.25V498c0,2.35-3.33,4.26-7.44,4.26H488.28c-4.11,0-7.45-1.91-7.45-4.26V178.88C480.83,176.53,484.17,174.63,488.28,174.63Z" transform="translate(1.43 1.6)"/>
            <path class="cls-2" d="M488.28,174.63h18.44c4.11,0,7.44,1.9,7.44,4.25V498c0,2.35-3.33,4.26-7.44,4.26H488.28c-4.11,0-7.45-1.91-7.45-4.26V178.88C480.83,176.53,484.17,174.63,488.28,174.63Z" transform="translate(1.43 1.6)"/>
            <?php 
            $sql = mysqli_query($koneksi,"SELECT * from status");
            $row = mysqli_fetch_assoc($sql);
            if($row['lahan_4']==0){
                echo '<a xlink:title="Lahan Parkir 04" xlink:href="">';
                echo '<rect class="cls-3" x="11.49" y="154.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="11.49" y="154.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="11.49" y="154.1" width="234.36" height="115.16"/>';
                echo '<g class="cls-8">';
                echo '<text class="cls-9" transform="translate(49.92 229.27) rotate(-88.46)">04</text>';
                echo '</g>';
                echo '</a>';
            }
            else{
                echo '<polygon points="13.15 151.1 13.15 263.5 247.51 263.5 247.51 149.5 13.15 151.1" style="fill:#020202;stroke:#fdfeff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"/>';
                echo '<line x1="13.16" y1="151.1" x2="247.52" y2="263.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '<line x1="13.16" y1="263.5" x2="247.52" y2="149.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '';
            }
    
            if($row['lahan_5']==0){
                echo '<a xlink:title="Lahan Parkir 05" xlink:href="">';
                echo '<rect class="cls-3" x="11.49" y="268.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="11.49" y="268.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="11.49" y="268.1" width="234.36" height="115.16"/>';
                echo '<g class="cls-8">';
                echo '<text class="cls-9" transform="translate(49.92 337.27) rotate(-88.46)">05</text>';
                echo '</g>';
                echo '</a>';
            }
            else{
                echo '<polygon points="13.48 266.31 13.48 378.69 247.84 378.69 247.84 264.69 13.48 266.31" style="fill:#020202;stroke:#fdfeff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"/>';
                echo '<line x1="13.49" y1="266.3" x2="247.85" y2="378.69" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '<line x1="13.49" y1="378.69" x2="247.85" y2="264.69" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '';
            }
            if($row['lahan_6']==0){
                echo '<a xlink:title="Lahan Parkir 06" xlink:href="">';
                echo '<rect class="cls-3" x="11.49" y="384.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="11.49" y="384.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="11.49" y="384.1" width="234.36" height="115.16"/>';
                echo '';
                echo '<g class="cls-8">';
                echo '<text class="cls-9" transform="translate(49.93 457.27) rotate(-88.46)">06</text>';
                echo '</g>';
                echo '</a>';     
            }
            else{
                echo '<polygon points="13.4 382.12 13.4 494.5 247.76 494.5 247.76 380.5 13.4 382.12" style="fill:#020202;stroke:#fdfeff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"/>';
                echo '<line x1="13.41" y1="382.1" x2="247.77" y2="494.51" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '<line x1="13.41" y1="494.51" x2="247.77" y2="380.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
            }   
            ?>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <path class="cls-6" d="M616.06,205.3,652,182.61l1.7,42.44Z" transform="translate(1.43 1.6)"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <?php 
            $sql = mysqli_query($koneksi,"SELECT * from status");
            $row = mysqli_fetch_assoc($sql);
            if($row['lahan_3']==0){
                echo '<a xlink:title="Lahan Parkir 03" xlink:href="">';
                echo '<rect class="cls-3" x="807.49" y="152.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="807.49" y="152.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="807.49" y="152.1" width="234.36" height="115.16"/>';
                echo '<g class="cls-8">';
                echo '<text class="cls-9" transform="translate(990.67 185.13) rotate(90)">03</text>';
                echo '</g>';
                echo '</a>';
            }
            else{
                echo '<polygon points="808.15 154.1 808.15 266.5 1042.52 266.5 1042.52 152.5 808.15 154.1" style="fill:#020202;stroke:#fdfeff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"/>';
                echo '<line x1="808.16" y1="154.1" x2="1042.52" y2="266.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '<line x1="808.16" y1="266.5" x2="1042.52" y2="152.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '';
            }
    
            if($row['lahan_2']==0){
                echo '<a xlink:title="Lahan Parkir 02" xlink:href="">';
                echo '<rect class="cls-3" x="807.49" y="266.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="807.49" y="266.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="807.49" y="266.1" width="234.36" height="115.16"/>';
                echo '<g class="cls-8">';
                echo '<text class="cls-9" transform="translate(990.92 299.13) rotate(90)">02</text>';
                echo '</g>';
                echo '</a>';
            }
            else{
                echo '<polygon points="808.49 269.31 808.49 381.69 1042.85 381.69 1042.85 267.69 808.49 269.31" style="fill:#020202;stroke:#fdfeff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"/>';
                echo '<line x1="808.49" y1="269.3" x2="1042.85" y2="381.69" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '<line x1="808.49" y1="381.69" x2="1042.85" y2="267.69" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '';
            }
    
            if($row['lahan_1']==0){
                echo '<a xlink:title="Lahan Parkir 01" xlink:href="">';
                echo '<rect class="cls-3" x="807.49" y="382.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="807.49" y="382.1" width="234.36" height="115.16"/>';
                echo '<rect class="cls-3" x="807.49" y="382.1" width="234.36" height="115.16"/>';
                echo '<g class="cls-8">';
                echo '<text class="cls-9" transform="translate(991.21 421.13) rotate(90)">01</text>';
                echo '</g>';
                echo '</a>';
            }
            else{
                echo '<polygon points="808.4 385.12 808.4 497.5 1042.77 497.5 1042.77 383.5 808.4 385.12" style="fill:#020202;stroke:#fdfeff;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px"/>';
                echo '<line x1="808.41" y1="385.1" x2="1042.77" y2="497.51" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '<line x1="808.41" y1="497.51" x2="1042.77" y2="383.5" style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/>';
                echo '';
            }
            ?>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <path class="cls-6" d="M616.06,205.3,652,182.61l1.7,42.44Z" transform="translate(1.43 1.6)"/>
            <rect class="cls-4" x="640.13" y="200.63" width="43.9" height="12.05"/>
            <rect class="cls-5" x="667.57" y="201.62" width="15.96" height="84.56"/>
            <path class="cls-6" d="M338.47,333.9l51.38,1-26.53,44Z" transform="translate(1.43 1.6)"/>
            <rect class="cls-7" x="356.82" y="259.54" width="15.96" height="84.56"/>
            <rect class="cls-7" x="356.82" y="259.54" width="15.96" height="84.56"/>
            <rect class="cls-7" x="356.82" y="259.54" width="15.96" height="84.56"/>
            <rect class="cls-7" x="356.82" y="259.54" width="15.96" height="84.56"/>        
</svg>