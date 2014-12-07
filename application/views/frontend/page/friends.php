<div class="page-title">
    <i class="icon-custom-left"></i>
    <h3>Search - <span class="semi-bold">Results</span></h3>
</div>
<div id="Filters" class="pull-left">
    
    <div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"> <span class="anim150">Group</span> <span class="caret"></span> </a>
        <ul class="dropdown-menu">
            <li data-dimension="recreation" data-filter="all" class="active"><a href="#">Semua</a></li>
            <?php if (isset($groups)): ?>
              <?php foreach ($groups as $row): ?>
                <?php if (isset($child_groups)): ?>
                  <?php foreach ($child_groups as $rowChild): ?>
                    <?php if ($rowChild['PARENT_ID_GROUP'] == $row['ID_GROUP']): ?>
                        
                      <li data-dimension="recreation" data-filter="<?php echo $rowChild['NAMA_GROUP'] ?>" class=""><a href="#"><?php echo ucfirst(strtolower($row['NAMA_GROUP'])).' => '.ucfirst(strtolower($rowChild['NAMA_GROUP'])); ?></a></li>
                        
                    <?php endif ?>
                  <?php endforeach ?>
                <?php endif ?> 
              <?php endforeach ?>
            <?php endif ?> 

        </ul>
    </div>
</div>
<div class="pull-right">
    <div class="btn-group" data-toggle="buttons-radio">
        <button id="ToList" type="button" class="btn btn-primary active"><i class="icon-th-list"></i></button>
    </div>
</div>
<div class="clearfix"></div>
<br>
<ul class="just list" id="Parks" style="   ">
    <!-- "TABLE" HEADER CONTAINING SORT BUTTONS (HIDDEN IN GRID MODE)-->
    <div class="list_header">
        <div id="SortByName" class="meta name active desc"> Nama &nbsp; <span data-order="desc" data-sort="data-name" class="sort anim150 asc active"></span> <span data-order="asc" data-sort="data-name" class="sort anim150 desc"></span> </div>
        <div class="meta region">Group <span data-order="asc" data-sort="data-group" class="sort anim150 asc"></span> <span data-order="desc" data-sort="data-area" class="sort anim150 desc"></span></div>
        <div class="meta rec">Jabatan </div>
    </div>
    <!-- FAIL ELEMENT -->
    <div class="fail_element anim250">Maaf &mdash; data tidak ditemukan.</div>
    <!-- BEGIN LIST OF PARKS (MANY OF THESE ELEMENTS ARE VISIBLE ONLY IN LIST MODE)-->



        <?php if (isset($friends)): ?>
          <?php foreach ($friends as $row): ?>
            
        <li data-group="<?php echo $row['NAMA_GROUP']; ?>" data-name="<?php echo $row['NAMA'] ?>" class="mix <?php echo $row['NAMA_GROUP'].' '.$row['CONTENT_UNIT_KERJA'].' '.$row['POSTITLE'].' '.$row['UNITKERJA'] ?> mix_all" style="">
            <div class="meta name">
                <div class="img_wrapper"> <img src="<?php echo base_url(); ?>/<?php echo $row['GAMBAR_PROFIL']; ?>"> </div>
                <div class="titles">
                    <h2><?php echo $row['NIK'] ?></h2>
                    <p><em><?php echo $row['NAMA'] ?></em></p>
                </div>
            </div>
            <div class="meta region">
                <ul>
                    <li><?php echo $row['NAMA_GROUP'] ?></li>
                    <li><?php echo $row['CONTENT_UNIT_KERJA'] ?></li>
                    <li><?php echo $row['POSTITLE'] ?></li>
                    <li><?php echo $row['UNITKERJA'] ?></li>
                </ul>
            </div>
            <div class="meta rec">
                <a href="<?php echo site_url('user/action/hapusTeman/'.$row['ID_user']); ?>" class="btn btn-primary">Hapus</a>
            </div>
        </li>

          <?php endforeach ?>
        <?php endif ?>


        <!-- END LIST OF PARKS -->
      </ul>
    </div>