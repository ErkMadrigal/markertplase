<main class="page-content mb-5">
    <?php 
        $titlePage = "contacts";
        $titleNav = "contacts";
        include 'modules/components/nav-page.php';
    ?>
    <section class="content">

        <div class="card card-solid">
            <div class="card-body pb-0 pl-2 pr-2">
                <div class="row" id="content-Usr">
                    
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
        </div>
    </section>
</main>