<main class="page-content mb-5">
    <?php 
        $titlePage = "contacts";
        $titleNav = "contacts";
        include 'modules/components/nav-page.php';
    ?>
    <section class="content">

        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <?php for ($i=0; $i <9 ; $i++):?>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Tipo usr <p class="float-right"><b>se unio el</b> fecha</p>
                                </div>
                                <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                    <h2 class="lead"><b>Nicole Pearson</b></h2>
                                    <p class="text-muted text-sm"><b>Fecha de nasim.</b> fecha nas </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> direccion</li><br>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> phone</li><br>
                                        <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> email</li><br>

                                    </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="img/avatar.png" alt="" class="img-circle img-fluid">
                                    </div>
                                </div>
                                </div>
                                <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                </div>
            </div>
            <div class="card-footer">
                <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                    <?php for ($i=0; $i <10 ; $i++): ?>
                        <li class="page-item <?= ($i === 0) ? "active" : "";?>"><a class="page-link" href="#"><?= $i +1; ?></a></li>
                    <?php endfor;?>
                </ul>
                </nav>
        </div>
    </section>
</main>