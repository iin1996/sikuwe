<!-- awal topbar -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <a class="navbar-brand" href="<?php echo Yii::app()->baseUrl ?>"> <img alt="Logo SIKUWE" src="<?php echo Yii::app()->theme->baseUrl ?>/assets/img/aja-protes-eh.png" class="hidden-xs"/>
            <span>SIKUWE</span></a>

        <!-- awal user dropdown -->
        <div class="btn-group pull-right" style="margin-right:3%;">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <?php echo Yii::app()->user->name; ?></span>
                <!-- <span class="caret"></span> -->
            </button>

        </div>
        <!-- akhir user dropdown -->


        <ul class="collapse navbar-collapse nav navbar-nav top-menu">
            <!-- <li><a href="http://puskomedia.com"><i class="glyphicon glyphicon-globe"></i> Kunjungi situs pembuat</a></li> -->
            <li>


                <form class="navbar-search pull-left">
                    <input placeholder="Pencarian" class="search-query form-control col-md-10" name="query"
                           type="text" style="min-width: 155px">
                </form>
            </li>
        </ul>

    </div>
</div>
<!-- akhir topbar -->
