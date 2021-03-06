<?php

/**
 * MDPU Finance
 * @category   Modules
 * @package    Cabang
 * @subpackage Form
 * @filesource form-add-cabang.phtml
 */

?>
<div class="container-fluid">
    <br/>
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> <a href="<?php echo URL ?>">Home</a>
                </li>
                <li>
                    <i class="fa  fa-table"></i> <a href="<?php echo URL ?>cabang">Data Cabang</a>
                </li>
                <li>
                    Input Cabang
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-archive fa-fw"></i> Form Input Cabang</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo URL ?>cabang/index/save" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Provinsi</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="judul" placeholder="Provinsi" name="provinsi" 
                                       value =""required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Kota</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="judul" placeholder="Kota" name="kota" 
                                       value =""required>
                            </div>
                        </div>    

                        <div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Kode Post</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="judul" placeholder="Kode Pos" name="kode_pos" 
                                       value =""required>
                            </div>
                        </div>    


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-default">Cancel</button>
                            </div>
                        </div>                               
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>